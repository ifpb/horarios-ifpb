<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Time;
use App\Day;

class ApiViewController extends Controller
{
    public function getTableClassroomReservations(Classroom $classroom)
    {
        $classroom->load('reservations.classroom',
            'reservations.teachingClass.professor',
            'reservations.teachingClass.subject',
            'reservations.teachingClass.type');

        $times = Time::orderBy('id', 'asc')->get();
        $days = Day::orderBy('id', 'asc')->get();

        $dayTimeReservations = $this->getDayTimeReservationCollection($times, $days, $classroom);

        return view('api.tabelas.reservas-da-sala', compact('classroom', 'times', 'days', 'dayTimeReservations'));
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
