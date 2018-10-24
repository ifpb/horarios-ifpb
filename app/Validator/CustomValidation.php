<?php

namespace App\Validator;

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
}