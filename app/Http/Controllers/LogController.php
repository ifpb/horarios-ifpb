<?php

namespace App\Http\Controllers;

use App\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Log::with('user')->orderBy('id', 'desc')->take(100)->get();
        return view('pages.admin.sistema.logs.logs', compact('logs'));
    }
}
