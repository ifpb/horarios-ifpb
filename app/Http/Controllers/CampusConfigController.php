<?php

namespace App\Http\Controllers;

use App\CampusConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Support\LogActivity;

class CampusConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campus = CampusConfig::first();
        return view('pages.admin.config-campus', compact('campus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $campus = CampusConfig::first();

        request()->validate([
            'location' => ['required', 'min:3'],
            'initials' => ['required', 'min:2'],
        ]);

        $campus->update(request(['location', 'initials']));

        LogActivity::store("Atualizou as configurações do Campus");

        flash('O campus foi atualizado!');
        return back();
    }
}