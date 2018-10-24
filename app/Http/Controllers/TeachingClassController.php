<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Professor;
use App\TeachingClass;
use App\TeachingClassType;
use App\Support\LogActivity;

class TeachingClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachingClasses = TeachingClass::with('subject', 'professor', 'type')->get();
        return view('pages.admin.educacional.turmas.turmas', compact('teachingClasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $professors = Professor::all();
        $teaching_class_types = TeachingClassType::all();

        return view('pages.admin.educacional.turmas.adicionar-turma',
            compact('subjects', 'professors', 'teaching_class_types'));
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
            'subject_id' => 'required|exists:subjects,id',
            'professor_id' => 'required|exists:professors,id|unique_teaching_class:' . request('subject_id'),
            'teaching_class_type_id' => 'required|exists:teaching_class_types,id',
        ]);

        $teachingClass = TeachingClass::create(request(['subject_id', 'professor_id', 'teaching_class_type_id']));
        $teachingClass->load('subject', 'professor');

        LogActivity::store("Adicionou a turma " . $teachingClass->id . " (". $teachingClass->subject->name .", ". $teachingClass->professor->name .")");

        return redirect(route('teachingclasses.show', $teachingClass->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeachingClass  $teachingClass
     * @return \Illuminate\Http\Response
     */
    public function show(TeachingClass $teachingClass)
    {
        return view('pages.admin.educacional.turmas.ver-turma', compact('teachingClass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeachingClass  $teachingClass
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachingClass $teachingClass)
    {
        $subjects = Subject::all();
        $professors = Professor::all();
        $teaching_class_types = TeachingClassType::all();

        return view('pages.admin.educacional.turmas.editar-turma',
            compact('teachingClass', 'subjects', 'professors', 'teaching_class_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeachingClass  $teachingClass
     * @return \Illuminate\Http\Response
     */
    public function update(TeachingClass $teachingClass)
    {
        request()->validate([
            'subject_id' => 'required|exists:subjects,id',
            'professor_id' => 'required|exists:professors,id|unique_teaching_class:' . request('subject_id')
                . ',' . $teachingClass->id,
            'teaching_class_type_id' => 'required|exists:teaching_class_types,id',
        ]);

        $teachingClass->update(request(['subject_id', 'professor_id', 'teaching_class_type_id']));
        $teachingClass->load('subject', 'professor');

        LogActivity::store("Atualizou a turma a turma " . $teachingClass->id . " (". $teachingClass->subject->name .", ". $teachingClass->professor->name .")");

        return redirect(route('teachingclasses.show', $teachingClass->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachingClass  $teachingClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachingClass $teachingClass)
    {
        $teachingClass->load('subject', 'professor');
        LogActivity::store("Removeu a turma ".$teachingClass->id." de Disciplina "
            . $teachingClass->subject->name . " e professor " . $teachingClass->professor->name);

        $teachingClass->delete();

        flash('A turma foi removida!');

        return redirect(route('teachingclasses'));
    }
}
