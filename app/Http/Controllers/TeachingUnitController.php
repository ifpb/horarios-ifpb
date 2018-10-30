<?php

namespace App\Http\Controllers;

use App\TeachingUnit;
use App\Support\LogActivity;

class TeachingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachingunits = TeachingUnit::all();
        return view('pages.admin.educacional.unidades.unidades-de-ensino', compact('teachingunits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.educacional.unidades.adicionar-unidade');
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
            'name' => 'required|min:2|unique:teaching_units',
            'initials' => 'required|max:12|unique:teaching_units',
        ]);

        $teachingunit = TeachingUnit::create(request(['name', 'initials']));
        LogActivity::store("Criou a unidade de ensino " . $teachingunit->id);

        return redirect(route('teachingunits.show', $teachingunit));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function show(TeachingUnit $teachingUnit)
    {
        $teachingUnit->load('courses', 'professors');
        return view('pages.admin.educacional.unidades.ver-unidade', compact('teachingUnit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachingUnit $teachingUnit)
    {
        return view('pages.admin.educacional.unidades.editar-unidade', compact('teachingUnit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function update(TeachingUnit $teachingUnit)
    {
        request()->validate([
            'name' => 'required|min:2|unique:teaching_units,name,'.$teachingUnit->id,
            'initials' => 'required|max:12|unique:teaching_units,initials,'.$teachingUnit->id,
        ]);

        $teachingUnit->update(request(['name', 'initials']));
        LogActivity::store("Atualizou informações da unidade de ensino id " . $teachingUnit->id);

        return redirect(route('teachingunits.show', $teachingUnit));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachingUnit $teachingUnit)
    {
        LogActivity::store("Removeu a unidade de ensino ".$teachingUnit->id." de nome ".$teachingUnit->name);

        $teachingUnit->delete();

        flash('A unidade de ensino foi removida!');
        return redirect(route('teachingunits'));
    }
}
