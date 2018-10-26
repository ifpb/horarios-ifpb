<?php

namespace App\Http\Controllers;

use App\Block;
use App\ClassroomReservation;
use App\TeachingClass;
use App\ClassroomRerservation;
use App\Support\LogActivity;

class ClassroomReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::with('classrooms')->get();
        return view('pages.admin.salas.reservas.reservas', compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachingClasses = TeachingClass::with('subject', 'professor')->orderBy('id', 'desc')->get();
        $blocks = Block::with('classrooms')->get();

        return view('pages.admin.salas.reservas.adicionar-reserva', compact('teachingClasses', 'blocks'));
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
            'teaching_class_id' => 'required|exists:teaching_classes,id',
            'classroom_id' => 'required|exists:classrooms,id',
            'reserveClass' => 'required|unique_time_hour_class:' . request('classroom_id')
                . '|professor_cant_be_busy:' . request('teaching_class_id'),
        ]);

        // ADICIONAR NOVA VERIFICAÇÃO: E se o cara enviar DAYS E TIMES fora do intervalo?
        // Sugestão: day_time_exists

        foreach(request('reserveClass') as $timeId => $days) {
            foreach($days as $dayId => $dayVal) {
                ClassroomReservation::create([
                    'classroom_id' => request('classroom_id'),
                    'day_id' => $dayId,
                    'time_id' => $timeId,
                    'teaching_class_id' => request('teaching_class_id')
                ]);

                LogActivity::store("Reservou a sala " . request('classroom_id') . " para o dia " . $dayId .
                    " e hora " . $timeId . " para a turma " . request('teaching_class_id'));
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassroomRerservation  $classroomRerservation
     * @return \Illuminate\Http\Response
     */
    public function show(ClassroomRerservation $classroomRerservation)
    {
        return view('pages.admin.salas.reservas.ver-reserva');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassroomRerservation  $classroomRerservation
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassroomRerservation $classroomRerservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassroomRerservation  $classroomRerservation
     * @return \Illuminate\Http\Response
     */
    public function update(ClassroomRerservation $classroomRerservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassroomRerservation  $classroomRerservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassroomRerservation $classroomRerservation)
    {
        //
    }
}
