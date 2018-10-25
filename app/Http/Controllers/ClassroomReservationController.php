<?php

namespace App\Http\Controllers;

use App\Block;
use App\Time;
use App\Day;
use App\Classroom;
use App\ClassroomRerservation;
use Illuminate\Http\Request;

class ClassroomReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::with('classrooms.reservations.classroom',
            'classrooms.reservations.teachingClass.professor',
            'classrooms.reservations.teachingClass.subject',
            'classrooms.reservations.teachingClass.type')->get();

        $firstClassroom = $blocks[0]->classrooms[0];

        $times = Time::orderBy('id', 'asc')->get();
        $days = Day::orderBy('id', 'asc')->get();

        $dayTimeReservations = $this->getDayTimeReservationCollection($times, $days, $firstClassroom);

        return view('pages.admin.salas.reservas.reservas', compact('firstClassroom', 'blocks', 'times', 'days', 'dayTimeReservations'));
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.salas.reservas.adicionar-reserva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, ClassroomRerservation $classroomRerservation)
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
