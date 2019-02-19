<?php

namespace App\Http\Controllers;

use App\Course;
use App\EducationLevel;
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

    public function course()
    {
        return view('pages.course');
    }
}
