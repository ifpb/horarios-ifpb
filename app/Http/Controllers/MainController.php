<?php

namespace App\Http\Controllers;

use App\Course;
use App\Day;
use App\Classroom;
use App\Professor;
use App\EducationLevel;
use App\Time;

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

    public function classrooms()
    {
        $classrooms = Classroom::where('classroom_type_id', 1)->with('block')->get();

        return view('pages.classrooms', compact('classrooms'));
    }

    public function classroom($slug)
    {
        $classroom = Classroom::where('slug', $slug)->with('type', 'block',
            'reservations.classroom',
            'reservations.teachingClass.professor',
            'reservations.teachingClass.subject',
            'reservations.teachingClass.type')->firstOrFail();

        $times = Time::orderBy('id', 'asc')->get();
        $days = Day::orderBy('id', 'asc')->get();

        $dayTimeReservations = $this->getClassroomDayTimeReservationCollection($times, $days, $classroom);

        return view('pages.classroom', compact('classroom', 'times', 'days', 'dayTimeReservations'));
    }

    public function labs()
    {
        $classrooms = Classroom::where('classroom_type_id', 2)->with('block')->get();

        return view('pages.labs', compact('classrooms'));
    }

    public function professors()
    {
        $professors = Professor::all();

        return view('pages.professors', compact('professors'));
    }

    public function professor($id)
    {
        $professor = Professor::where('id', $id)->with('reservations.teachingClass',
            'reservations.classroom')->firstOrFail();

        $times = Time::orderBy('id', 'asc')->get();
        $days = Day::orderBy('id', 'asc')->get();

        $dayTimeReservations = $this->getDayTimeReservationCollection($times, $days, $professor->reservations);

        return view('pages.professor', compact('professor', 'days', 'times', 'dayTimeReservations'));
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

    public function getClassroomDayTimeReservationCollection($times, $days, Classroom $classroom)
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
