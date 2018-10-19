<?php

namespace App\Http\Controllers;

use App\Block;
use App\Support\LogActivity;

class BlockController extends Controller
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
        $blocks = Block::withCount('classrooms')->get();

        return view('pages.admin.salas.blocos.blocos', compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.salas.blocos.adicionar-bloco');
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
            'name' => 'required|min:2|unique',
            'initials' => 'required|max:12|unique',
            'location' => 'required',
        ]);

        $block = Block::create(request(['name', 'initials', 'location']));
        LogActivity::store("Criou o bloco " . $block->id);

        return redirect(route('blocks.show', $block));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        $block->load('classrooms.type');
        return view('pages.admin.salas.blocos.ver-bloco', compact('block'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $block)
    {
        return view('pages.admin.salas.blocos.editar-bloco', compact('block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function update(Block $block)
    {
        request()->validate([
            'name' => 'required|min:2|unique,name,'.$block->id,
            'initials' => 'required|max:12|unique,initials,'.$block->id,
            'location' => 'required',
        ]);

        $block->update(request(['name', 'initials', 'location']));
        LogActivity::store("Atualizou informações do bloco " . $block->id);

        flash('O bloco foi atualizado!');
        return redirect(action('BlockController@show', $block->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        LogActivity::store("Removeu o bloco ".$block->id." de nome ".$block->name);

        $block->delete();

        flash('O bloco foi removido!');
        return redirect(action('BlockController@index'));
    }
}
