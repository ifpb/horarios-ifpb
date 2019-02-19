<?php

namespace App\Validator;

use App\ClassroomReservation;
use App\TeachingClass;

class CustomValidation {
    public function uniqueTeachingClass($attribute, $value, $parameters, $validator)
    {
        $whatToCheck = [
            ['professor_id', '=', $value],
            ['subject_id', '=', $parameters[0]],
        ];

        if(count($parameters) == 2) {
            array_push($whatToCheck, ['id', '!=', $parameters[1]]);
        }

        return !(TeachingClass::where($whatToCheck)->exists());
    }

    public function uniqueTimeHourClass($attribute, $value, $parameters, $validator)
    {
        foreach($value as $timeId => $days) {
            foreach($days as $dayId => $dayVal) {
                if(ClassroomReservation::where([
                    ['time_id', '=', $timeId],
                    ['day_id', '=', $dayId],
                    ['classroom_id', '=', $parameters[0]]
                ])->exists())
                    return false;
            }
        }

        return true;
    }

    public function professorCantBeBusy($attribute, $value, $parameters, $validator)
    {
        $teachingClass = TeachingClass::with('professor')->where('id', $parameters[0])->first();
        $professor = $teachingClass->professor;
        $professor->load('teachingClasses');

        foreach($value as $timeId => $days) {
            foreach($days as $dayId => $dayVal) {
                foreach($professor->teachingClasses as $teaching_class) {
                    if(ClassroomReservation::where([
                        ['time_id', '=', $timeId],
                        ['day_id', '=', $dayId],
                        ['teaching_class_id', '=', $teaching_class->id]
                    ])->exists()) {
                        flash('Professor está ocupado na hora '
                            . $timeId . ' no dia ' . $dayId . ' para a turma ' . $teaching_class->id, 'danger');
                        return false;
                    }
                }
            }
        }

        return true;
    }
}