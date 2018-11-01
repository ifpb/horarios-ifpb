<?php

namespace App\Http\Controllers;

use App\Block;
use App\ClassroomReservation;
use App\TeachingClass;
use App\Day;
use App\Time;

class ApiController extends Controller
{
    public function getBlockClassrooms(Block $block)
    {
        $block->load('classrooms:id,name,block_id');
        return $block->classrooms;
    }

    public function isProfessorAvailable(TeachingClass $teachingClass, Day $day, Time $time)
    {
        $teachingClass->load('professor.teachingClasses');

        $teachingClassesIds = $teachingClass->professor->teachingClasses->pluck('id');

        if(ClassroomReservation::wherein('teaching_class_id', $teachingClassesIds)
            ->where([
                'day_id' => $day->id,
                'time_id' => $time->id
            ])->exists())
            return response()->json(false);

        return response()->json(true);
    }
}
