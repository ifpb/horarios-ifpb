<?php

namespace App\Http\Controllers;

use App\Block;
use App\Time;
use App\Day;
use App\Classroom;
use App\ClassroomType;
use App\Support\LogActivity;


class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::with('block', 'type')->get();

        return view('pages.admin.salas.salas.salas', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classroom_types = ClassroomType::all();
        $blocks = Block::all();

        return view('pages.admin.salas.salas.adicionar-sala', compact('classroom_types', 'blocks'));
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
            'classroom_type_id' => 'required|exists:classroom_types,id',
            'block_id' => 'required|exists:blocks,id',
            'name' => 'required|min:2|unique:classrooms',
            'initials' => 'required|max:12|unique:classrooms',
            'capacity' => 'required|integer',
        ]);

        $classroom = Classroom::create(request(['classroom_type_id', 'block_id', 'name', 'initials', 'capacity']));
        LogActivity::store("Criou a sala " . $classroom->id);

        return redirect(route('classroom.show', $classroom));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        $classroom->load('type', 'block',
            'reservations.classroom',
            'reservations.teachingClass.professor',
            'reservations.teachingClass.subject',
            'reservations.teachingClass.type');

        $times = Time::orderBy('id', 'asc')->get();
        $days = Day::orderBy('id', 'asc')->get();

        $dayTimeReservations = $this->getDayTimeReservationCollection($times, $days, $classroom);

        return view('pages.admin.salas.salas.ver-sala', compact('classroom', 'times', 'days', 'dayTimeReservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        $classroom->load('type', 'block');
        $classroom_types = ClassroomType::all();
        $blocks = Block::all();

        return view('pages.admin.salas.salas.editar-sala', compact('classroom', 'classroom_types', 'blocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Classroom $classroom)
    {
        request()->validate([
            'classroom_type_id' => 'required|exists:classroom_types,id',
            'block_id' => 'required|exists:blocks,id',
            'name' => 'required|min:2|unique:classrooms,name,' . $classroom->id,
            'initials' => 'required|max:12|unique:classrooms,initials,'. $classroom->id,
            'capacity' => 'required|integer',
        ]);

        $classroom->update(request(['classroom_type_id', 'block_id', 'name', 'initials', 'capacity']));
        LogActivity::store("Atualizou informações da Sala de aula id " . $classroom->id);

        flash('A sala de aula foi atualizada!');
        return redirect(route('classroom.show', $classroom->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        LogActivity::store("Removeu a sala ".$classroom->id." de nome ".$classroom->name);

        $classroom->delete();

        flash('A sala foi removida!');
        return redirect(route('classrooms'));
    }

    public function getDayTimeReservationCollection($times, $days, Classroom $classroom)
    {
        foreach($times as $time) {
            $timeReservations[$time->id] = $classroom->reservations->where('time_id', $time->id);

            foreach($days as $day) {
                $dayTimeReservations[$time->id][$day->id] = $timeReservations[$time->id]->where('day_id', $day->id);
            }
        }

        return $dayTimeReservations;
    }
}
