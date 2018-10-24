<?php

namespace App\Http\Controllers;

use App\EmploymentBond;
use App\Support\LogActivity;

class EmploymentBondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employmentBonds = EmploymentBond::all();
        return view('pages.admin.professores.vinculos.tipos-de-vinculo', compact('employmentBonds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.professores.vinculos.adicionar-vinculo');
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
            'name' => 'required|min:2|unique:employment_bonds'
        ]);

        $employmentBond = EmploymentBond::create(request(['name']));
        LogActivity::store("Criou vínculo empregatício " . $employmentBond->id);

        return redirect(route('employmentbonds.show', $employmentBond->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmploymentBond  $employmentBond
     * @return \Illuminate\Http\Response
     */
    public function show(EmploymentBond $employmentBond)
    {
        return view('pages.admin.professores.vinculos.ver-vinculo', compact('employmentBond'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmploymentBond  $employmentBond
     * @return \Illuminate\Http\Response
     */
    public function edit(EmploymentBond $employmentBond)
    {
        return view('pages.admin.professores.vinculos.editar-vinculo', compact('employmentBond'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmploymentBond  $employmentBond
     * @return \Illuminate\Http\Response
     */
    public function update(EmploymentBond $employmentBond)
    {
        request()->validate([
            'name' => 'required|min:2|unique:employment_bonds,name,' . $employmentBond->id
        ]);

        $employmentBond->update(request(['name']));
        LogActivity::store("Atualizou vínculo empregatício " . $employmentBond->id);

        return redirect(route('employmentbonds.show', $employmentBond->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmploymentBond  $employmentBond
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmploymentBond $employmentBond)
    {
        LogActivity::store("Removeu o vínculo empregatício ".$employmentBond->id." de nome ".$employmentBond->name);

        $employmentBond->delete();

        flash('O vínculo empregatício foi removido!');
        return redirect(route('employmentbonds'));
    }
}
