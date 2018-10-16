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

Route::get('/cursos', function() {
    return view('pages.majors');
});

Route::get('/cursos/redes-de-computadores', function() {
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
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

