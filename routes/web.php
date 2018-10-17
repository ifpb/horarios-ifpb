<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('cursos', function() {
    return view('pages.majors');
});

Route::get('cursos/redes-de-computadores', function() {
    return view('pages.major');
});

Route::group(array('prefix' => 'admin'), function()
{
    Route::get('/', function() {
        return view('pages.admin.home');
    });
    Route::get('config-campus', function() {
        return view('pages.admin.config-campus');
    });


    Route::get('salas', function() {
        return view('pages.admin.salas.gerencia-salas');
    });
    Route::get('salas/adicionar', function() {
        return view('pages.admin.salas.adicionar-sala');
    });
    Route::get('salas/ver', function() { //Lembrar que vai ser o ID
        return view('pages.admin.salas.ver-sala');
    });


    Route::get('unidades-de-ensino', function() {
        return view('pages.admin.educacional.unidades.unidades-de-ensino');
    });
    Route::get('unidades-de-ensino/adicionar', function() {
        return view('pages.admin.educacional.unidades.adicionar-unidade');
    });
    Route::get('unidades-de-ensino/ver', function() {
        return view('pages.admin.educacional.unidades.ver-unidade');
    });


    Route::get('niveis-de-ensino', function() {
        return view('pages.admin.educacional.niveis.niveis-de-ensino');
    });
    Route::get('niveis-de-ensino/adicionar', function() {
        return view('pages.admin.educacional.niveis.adicionar-nivel');
    });
    Route::get('niveis-de-ensino/ver', function() {
        return view('pages.admin.educacional.niveis.ver-nivel');
    });
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

