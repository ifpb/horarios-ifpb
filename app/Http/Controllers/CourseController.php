<?php

namespace App\Http\Controllers;

use App\Course;
use App\EducationLevel;
use App\Shift;
use App\TeachingUnit;
use App\Support\LogActivity;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('pages.admin.educacional.cursos.cursos', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachingUnits = TeachingUnit::all();
        $educationLevels = EducationLevel::all();
        $shifts = Shift::all();

        return view('pages.admin.educacional.cursos.adicionar-curso', compact('teachingUnits', 'educationLevels', 'shifts'));
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
            'teaching_unit_id' => 'required|exists:teaching_units,id',
            'name' => 'required|min:2|unique:courses',
            'initials' => 'required|max:12|unique:courses',
            'periods' => 'required|integer',
            'education_level_id' => 'required|exists:education_levels,id',
            'shifts.*' => 'required|exists:shifts,id',
        ]);

        $course = Course::create(request(['teaching_unit_id', 'name', 'initials', 'periods', 'education_level_id']));
        $course->shifts()->sync(request('shifts'));

        LogActivity::store("Adicionou o curso " . $course->id . "(". $course->name .")");

        return redirect(route('courses.show', $course));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $course->load('shifts', 'teachingUnit', 'EducationLevel', 'subjects');
        $shifts = Shift::all();

        return view('pages.admin.educacional.cursos.ver-curso', compact('course', 'shifts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $course->load('shifts');
        $teachingUnits = TeachingUnit::all();
        $educationLevels = EducationLevel::all();
        $shifts = Shift::all();

        $course->shifts = $course->shifts->pluck('id')->toArray();

        return view('pages.admin.educacional.cursos.editar-curso', compact('course', 'teachingUnits', 'educationLevels', 'shifts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course)
    {
        request()->validate([
            'teaching_unit_id' => 'required|exists:teaching_units,id',
            'name' => 'required|min:2|unique:courses,name,' . $course->id,
            'initials' => 'required|max:12|unique:courses,initials,' . $course->id,
            'periods' => 'required|integer',
            'education_level_id' => 'required|exists:education_levels,id',
            'shifts.*' => 'required|exists:shifts,id',
        ]);

        $course->update(request(['teaching_unit_id', 'name', 'initials', 'periods', 'education_level_id']));
        $course->shifts()->sync(request('shifts'));

        LogActivity::store("Atualizou o curso " . $course->id . "(". $course->name .")");

        return redirect(route('courses.show', $course));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        LogActivity::store("Removeu o curso ".$course->id." de nome ".$course->name);

        $course->delete();

        flash('O curso foi removido!');
        return redirect(route('courses'));
    }
}
