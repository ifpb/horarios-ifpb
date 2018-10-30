<?php

namespace App\Http\Controllers;

use App\EducationLevel;
use App\Support\LogActivity;

class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationLevels = EducationLevel::all();
        return view('pages.admin.educacional.niveis.niveis-de-ensino', compact('educationLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.educacional.niveis.adicionar-nivel');
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
            'name' => 'required|min:2|unique:education_levels',
        ]);

        $educationLevel = EducationLevel::create(request(['name']));
        LogActivity::store("Criou o nível de educação " . $educationLevel->id);

        return redirect(route('educationlevels.show', $educationLevel->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function show(EducationLevel $educationLevel)
    {
        $educationLevel->load('courses');
        return view('pages.admin.educacional.niveis.ver-nivel', compact('educationLevel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationLevel $educationLevel)
    {
        return view('pages.admin.educacional.niveis.editar-nivel', compact('educationLevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function update(EducationLevel $educationLevel)
    {
        request()->validate([
            'name' => 'required|min:2|unique:education_levels,name,'.$educationLevel->id
        ]);

        $educationLevel->update(request(['name']));
        LogActivity::store("Atualizou informações do nível de ensino id " . $educationLevel->id);

        return redirect(route('educationlevels.show', $educationLevel->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationLevel $educationLevel)
    {
        LogActivity::store("Removeu o nível de ensino ".$educationLevel->id." de nome ".$educationLevel->name);

        $educationLevel->delete();

        flash('O nível de ensino foi removido!');
        return redirect(route('educationlevels'));
    }
}
