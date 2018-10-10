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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

