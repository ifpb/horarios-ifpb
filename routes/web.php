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

    Route::get('config-campus', 'CampusConfigController@index');
    Route::patch('config-campus', 'CampusConfigController@update');

    // BLOCOS
    Route::get('blocos', 'BlockController@index')->name('blocks');
    Route::get('blocos/{block}/ver', 'BlockController@show')->name('blocks.show');

    Route::get('blocos/adicionar', 'BlockController@create')->name('blocks.create');
    Route::post('blocos', 'BlockController@store')->name('blocks.store');

    Route::get('blocos/{block}/editar', 'BlockController@edit')->name('blocks.edit');
    Route::patch('blocos/{block}', 'BlockController@update')->name('blocks.update');
    Route::get('blocos/{block}/remover', 'BlockController@destroy')->name('blocks.destroy');

    // SALAS
    Route::get('salas', 'ClassroomController@index')->name('classrooms');
    Route::get('salas/{classroom}/ver', 'ClassroomController@show')->name('classroom.show');

    Route::get('salas/adicionar', 'ClassroomController@create')->name('classroom.create');
    Route::post('salas', 'ClassroomController@store')->name('classroom.store');

    Route::get('salas/{classroom}/editar', 'ClassroomController@edit')->name('classroom.edit');
    Route::patch('salas/{classroom}', 'ClassroomController@update')->name('classroom.update');
    Route::get('salas/{classroom}/remover', 'ClassroomController@destroy')->name('classroom.destroy');

    Route::get('salas/reservas', function() {
        return view('pages.admin.salas.reservas.reservas');
    });
    Route::get('salas/reservas/adicionar', function() {
        return view('pages.admin.salas.reservas.adicionar-reserva');
    });
    Route::get('salas/reservas/ver', function() { //Lembrar que vai ser o ID
        return view('pages.admin.salas.reservas.ver-reserva');
    });


    // UNIDADES DE ENSINO
    Route::get('unidades-de-ensino', 'TeachingUnitController@index')->name('teachingunits');
    Route::get('unidades-de-ensino/{teachingUnit}/ver', 'TeachingUnitController@show')->name('teachingunits.show');

    Route::get('unidades-de-ensino/adicionar', 'TeachingUnitController@create')->name('teachingunits.create');
    Route::post('unidades-de-ensino', 'TeachingUnitController@store')->name('teachingunits.store');

    Route::get('unidades-de-ensino/{teachingUnit}/editar', 'TeachingUnitController@edit')->name('teachingunits.edit');
    Route::patch('unidades-de-ensino/{teachingUnit}', 'TeachingUnitController@update')->name('teachingunits.update');
    Route::get('unidades-de-ensino/{teachingUnit}/remover', 'TeachingUnitController@destroy')->name('teachingunits.destroy');


    Route::get('niveis-de-ensino', function() {
        return view('pages.admin.educacional.niveis.niveis-de-ensino');
    });
    Route::get('niveis-de-ensino/adicionar', function() {
        return view('pages.admin.educacional.niveis.adicionar-nivel');
    });
    Route::get('niveis-de-ensino/ver', function() {
        return view('pages.admin.educacional.niveis.ver-nivel');
    });

    Route::get('cursos', function() {
        return view('pages.admin.educacional.cursos.cursos');
    });
    Route::get('cursos/adicionar', function() {
        return view('pages.admin.educacional.cursos.adicionar-curso');
    });
    Route::get('cursos/ver', function() {
        return view('pages.admin.educacional.cursos.ver-curso');
    });

    Route::get('disciplinas', function() {
        return view('pages.admin.educacional.disciplinas.disciplinas');
    });
    Route::get('disciplinas/adicionar', function() {
        return view('pages.admin.educacional.disciplinas.adicionar-disciplina');
    });
    Route::get('disciplinas/ver', function() {
        return view('pages.admin.educacional.disciplinas.ver-disciplina');
    });

    Route::get('turmas', function() {
        return view('pages.admin.educacional.turmas.turmas');
    });
    Route::get('turmas/adicionar', function() {
        return view('pages.admin.educacional.turmas.adicionar-turma');
    });
    Route::get('turmas/ver', function() {
        return view('pages.admin.educacional.turmas.ver-turma');
    });

    Route::get('professores/vinculos', function() {
        return view('pages.admin.professores.vinculos.tipos-de-vinculo');
    });
    Route::get('professores/vinculos/adicionar', function() {
        return view('pages.admin.professores.vinculos.adicionar-vinculo');
    });
    Route::get('professores/vinculos/ver', function() {
        return view('pages.admin.professores.vinculos.ver-vinculo');
    });

    Route::get('professores/regimes', function() {
        return view('pages.admin.professores.regimes.tipos-de-regime');
    });
    Route::get('professores/regimes/adicionar', function() {
        return view('pages.admin.professores.regimes.adicionar-regime');
    });
    Route::get('professores/regimes/ver', function() {
        return view('pages.admin.professores.regimes.ver-regime');
    });

    Route::get('professores', function() {
        return view('pages.admin.professores.professores.professores');
    });
    Route::get('professores/adicionar', function() {
        return view('pages.admin.professores.professores.adicionar-professor');
    });
    Route::get('professores/ver', function() {
        return view('pages.admin.professores.professores.ver-professor');
    });

    Route::get('usuarios', function() {
        return view('pages.admin.usuarios.usuarios');
    });
    Route::get('usuarios/adicionar', function() {
        return view('pages.admin.usuarios.adicionar-usuario');
    });
    Route::get('usuarios/ver', function() {
        return view('pages.admin.usuarios.ver-usuario');
    });

    Route::get('logs', function() {
        return view('pages.admin.sistema.logs.logs');
    });
    Route::get('backups', function() {
        return view('pages.admin.sistema.backups.backups');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

