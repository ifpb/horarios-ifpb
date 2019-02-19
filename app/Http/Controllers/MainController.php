<?php

namespace App\Http\Controllers;

use App\Course;
use App\Day;
use App\EducationLevel;
use App\Time;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function courses()
    {
        $educationLevels = EducationLevel::with('courses')->get();

        return view('pages.courses', compact('educationLevels'));
    }

    public function course($slug)
    {
        $course = Course::where('slug', $slug)->with('subjects')->firstOrFail();

        $times = $course->shifts->pluck('times')->collapse()->sortBy('id');
        $days = Day::orderBy('id', 'asc')->get();

        $reservationsPeriod = [];

        for($x = 1; $x <= $course->periods; $x++) {
            $reservationsPeriod[$x] = $course->subjects->where('period', $x)
                ->load('teachingClasses.reservations',
                    'teachingClasses.reservations.teachingClass.subject',
                    'teachingClasses.reservations.teachingClass.professor',
                    'teachingClasses.reservations.teachingClass.type',
                    'teachingClasses.reservations.classroom')->pluck('teachingClasses')->collapse()
                ->pluck('reservations')->collapse();

            $reservationsPeriod[$x] =
                $this->getDayTimeReservationCollection($times, $days, $reservationsPeriod[$x]);
        }

        return view('pages.course', compact('course', 'days', 'times', 'reservationsPeriod'));
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
}
