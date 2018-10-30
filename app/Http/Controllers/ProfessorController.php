<?php

namespace App\Http\Controllers;

use App\EmploymentBond;
use App\EmploymentType;
use App\Professor;
use App\TeachingUnit;
use App\Day;
use App\Time;
use App\Support\LogActivity;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors = Professor::all();
        return view('pages.admin.professores.professores.professores', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachingUnits = TeachingUnit::all();
        $employmentBonds = EmploymentBond::all();
        $employmentTypes = EmploymentType::all();
        $days = Day::all()->sortBy('id');

        return view('pages.admin.professores.professores.adicionar-professor', compact('teachingUnits', 'employmentBonds', 'employmentTypes', 'days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'teaching_unit_id' => 'required|exists:teaching_units,id',
            'name' => 'required|min:2',
            'nickname' => 'required|max:20|unique:professors',
            'email' => 'nullable|email|unique:professors',
            'phone' => 'nullable|integer|unique:professors',
            'employment_bond_id' => 'required|exists:employment_bonds,id',
            'employment_type_id' => 'required|exists:employment_types,id',
            'days.*' => 'required|exists:days,id',
        ]);

        $professor = Professor::create(request([
            'teaching_unit_id',
            'name',
            'nickname',
            'email',
            'phone',
            'employment_bond_id',
            'employment_type_id'
        ]));
        $professor->days()->sync(request('days'));

        LogActivity::store("Adicionou o professor " . $professor->id . " (". $professor->name .")");

        return redirect(route('professors.show', $professor));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {
        $times = Time::orderBy('id', 'asc')->get();
        $days = Day::orderBy('id', 'asc')->get();

        $professor->load('teachingUnit', 'employmentBond', 'employmentType', 'days',
            'teachingClasses.subject',
            'teachingClasses.professor',
            'teachingClasses.type',
            'reservations.teachingClass.subject',
            'reservations.teachingClass.professor',
            'reservations.teachingClass.type');

        $dayTimeReservations = $this->getDayTimeReservationCollection($times, $days, $professor->reservations);

        return view('pages.admin.professores.professores.ver-professor', compact('professor', 'days', 'times', 'dayTimeReservations'));
    }

    public function getDayTimeReservationCollection($times, $days, $reservations)
    {
        foreach($times as $time) {
            $timeReservations[$time->id] = $reservations->where('time_id', $time->id);

            foreach($days as $day) {
                $dayTimeReservations[$time->id][$day->id] = $timeReservations[$time->id]->where('day_id', $day->id);
            }
        }

        return $dayTimeReservations;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        $professor->load('teachingUnit', 'employmentBond', 'employmentType', 'days');
        $teachingUnits = TeachingUnit::all();
        $employmentBonds = EmploymentBond::all();
        $employmentTypes = EmploymentType::all();
        $days = Day::all()->sortBy('id');

        $professor->days = $professor->days->pluck('id')->toArray();

        return view('pages.admin.professores.professores.editar-professor', compact('professor', 'teachingUnits', 'employmentBonds', 'employmentTypes', 'days'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Professor $professor)
    {
        request()->validate([
            'teaching_unit_id' => 'required|exists:teaching_units,id',
            'active' => 'required|boolean',
            'name' => 'required|min:2',
            'nickname' => 'required|max:20|unique:professors,nickname,' . $professor->id,
            'email' => 'nullable|email|unique:professors,email,' . $professor->id,
            'phone' => 'nullable|integer|unique:professors,phone,' . $professor->id,
            'employment_bond_id' => 'required|exists:employment_bonds,id',
            'employment_type_id' => 'required|exists:employment_types,id',
            'days.*' => 'required|exists:days,id',
        ]);

        $professor->update(request([
            'teaching_unit_id',
            'active',
            'name',
            'nickname',
            'email',
            'phone',
            'employment_bond_id',
            'employment_type_id'
        ]));
        $professor->days()->sync(request('days'));

        LogActivity::store("Atualizou o professor " . $professor->id . " (". $professor->name .")");

        return redirect(route('professors.show', $professor));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        LogActivity::store("Removeu o professor ".$professor->id." de nome ".$professor->name);

        $professor->delete();

        flash('O professor foi removido!');
        return redirect(route('professors'));
    }
}
