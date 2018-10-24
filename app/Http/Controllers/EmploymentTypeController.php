<?php

namespace App\Http\Controllers;

use App\EmploymentType;
use Illuminate\Http\Request;
use App\Support\LogActivity;

class EmploymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employmentTypes = EmploymentType::all();
        return view('pages.admin.professores.regimes.tipos-de-regime', compact('employmentTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.professores.regimes.adicionar-regime');
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
            'name' => 'required|min:2|unique:employment_types',
            'hours_week' => 'required|integer'
        ]);

        $employmentType = EmploymentType::create(request(['name', 'hours_week']));
        LogActivity::store("Criou regime empregatício " . $employmentType->id);

        return redirect(route('employmenttypes.show', $employmentType->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmploymentType  $employmentType
     * @return \Illuminate\Http\Response
     */
    public function show(EmploymentType $employmentType)
    {
        return view('pages.admin.professores.regimes.ver-regime', compact('employmentType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmploymentType  $employmentType
     * @return \Illuminate\Http\Response
     */
    public function edit(EmploymentType $employmentType)
    {
        return view('pages.admin.professores.regimes.editar-regime', compact('employmentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmploymentType  $employmentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmploymentType $employmentType)
    {
        request()->validate([
            'name' => 'required|min:2|unique:employment_types,name,' . $employmentType->id,
            'hours_week' => 'required|integer'
        ]);

        $employmentType->update(request(['name', 'hours_week']));
        LogActivity::store("Atualizou o regime empregatício " . $employmentType->id);

        return redirect(route('employmenttypes.show', $employmentType->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmploymentType  $employmentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmploymentType $employmentType)
    {
        LogActivity::store("Removeu o regime empregatício ".$employmentType->id." de nome ".$employmentType->name);

        $employmentType->delete();

        flash('O regime empregatício foi removido!');
        return redirect(route('employmenttypes'));
    }
}
