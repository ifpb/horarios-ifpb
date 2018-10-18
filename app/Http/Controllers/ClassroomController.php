<?php

namespace App\Http\Controllers;

use App\Block;
use App\Classroom;
use App\ClassroomType;
use App\Support\LogActivity;


class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::with('block', 'type')->get();

        return view('pages.admin.salas.salas.salas', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classroom_types = ClassroomType::all();
        $blocks = Block::all();

        return view('pages.admin.salas.salas.adicionar-sala', compact('classroom_types', 'blocks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validateClassroom();

        $classroom = Classroom::create(request(['classroom_type_id', 'block_id', 'name', 'initials', 'capacity']));
        LogActivity::store("Criou a sala " . $classroom->id);

        return redirect(route('classroom.show', $classroom));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        $classroom->load('type', 'block');

        return view('pages.admin.salas.salas.ver-sala', compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        $classroom->load('type', 'block');
        $classroom_types = ClassroomType::all();
        $blocks = Block::all();

        return view('pages.admin.salas.salas.editar-sala', compact('classroom', 'classroom_types', 'blocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Classroom $classroom)
    {
        $this->validateClassroom();

        $classroom->update(request(['classroom_type_id', 'block_id', 'name', 'initials', 'capacity']));
        LogActivity::store("Atualizou informações da Sala de aula id " . $classroom->id);

        flash('A sala de aula foi atualizada!');
        return redirect(route('classroom.show', $classroom->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        LogActivity::store("Removeu a sala ".$classroom->id." de nome ".$classroom->name);

        $classroom->delete();

        flash('A sala foi removido!');
        return redirect(route('classrooms'));
    }

    public function validateClassroom()
    {
        request()->validate([
            'classroom_type_id' => 'required|exists:classroom_types,id',
            'block_id' => 'required|exists:blocks,id',
            'name' => 'required|min:2|unique:classrooms',
            'initials' => 'required|max:12|unique:classrooms',
            'capacity' => 'required|integer',
        ]);
    }
}
