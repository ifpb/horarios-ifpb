<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use App\Support\LogActivity;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::with('course')->get();
        return view('pages.admin.educacional.disciplinas.disciplinas', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('pages.admin.educacional.disciplinas.adicionar-disciplina', compact('courses'));
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
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|min:2|unique:subjects',
            'initials' => 'required|max:15|unique:subjects',
            'period' => 'required|integer',
            'workload' => 'required|integer',
            'classes_week' => 'required|integer'
        ]);

        $subject = Subject::create(request(['course_id', 'name', 'initials', 'period', 'workload', 'classes_week']));
        LogActivity::store("Adicionou a disciplina " . $subject->id . "(". $subject->name .")");

        return redirect(route('subjects.show', $subject));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $subject->load('course');
        return view('pages.admin.educacional.disciplinas.ver-disciplina', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        $subject->load('course');
        $courses = Course::all();

        return view('pages.admin.educacional.disciplinas.editar-disciplina', compact('subject', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Subject $subject)
    {
        request()->validate([
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|min:2|unique:subjects,name,' . $subject->id,
            'initials' => 'required|max:15|unique:subjects,initials,' . $subject->id,
            'period' => 'required|integer',
            'workload' => 'required|integer',
            'classes_week' => 'required|integer'
        ]);

        $subject->update(request(['course_id', 'name', 'initials', 'period', 'workload', 'classes_week']));
        LogActivity::store("Atualizou a disciplina " . $subject->id . "(". $subject->name .")");

        return redirect(route('subjects.show', $subject));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        LogActivity::store("Removeu a disciplina ".$subject->id." de nome ".$subject->name);

        $subject->delete();

        flash('A disciplina foi removida!');
        return redirect(route('subjects'));
    }
}
