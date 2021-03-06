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

Route::get('/', 'MainController@home')->name('main.home');

Route::get('cursos', 'MainController@courses')->name('main.courses');
Route::get('cursos/{slug}', 'MainController@course')->name('main.course')->where(['slug' => '[a-z0-9-]+']);

Route::get('salas', 'MainController@classrooms')->name('main.classrooms');
Route::get('salas/{slug}', 'MainController@classroom')->name('main.classroom')->where(['slug' => '[a-z0-9-]+']);

Route::get('laboratorios', 'MainController@labs')->name('main.labs');
Route::get('laboratorios/{slug}', 'MainController@classroom')->name('main.lab')->where(['slug' => '[a-z0-9-]+']);

Route::get('professores', 'MainController@professors')->name('main.professors');
Route::get('professores/{id}', 'MainController@professor')->name('main.professor')->where(['id' => '[0-9]+']);

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function()
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

    // RESERVA DE SALAS
    Route::get('salas/reservas', 'ClassroomReservationController@index')->name('classroomsreservations');
    Route::get('salas/reservas/{classroomReservation}/ver', 'ClassroomReservationController@show')->name('classroomreservations.show');

    Route::get('salas/reservas/adicionar', 'ClassroomReservationController@create')->name('classroomreservations.create');
    Route::post('salas/reservas', 'ClassroomReservationController@store')->name('classroomreservations.store');

//    Route::get('salas/reservas/{classroomReservation}/editar', 'ClassroomReservationController@edit')->name('classroomreservations.edit');
//    Route::patch('salas/reservas/{classroomReservation}', 'ClassroomReservationController@update')->name('classroomreservations.update');
    Route::get('salas/reservas/{classroomReservation}/remover', 'ClassroomReservationController@destroy')->name('classroomreservetions.destroy');

    // UNIDADES DE ENSINO
    Route::get('unidades-de-ensino', 'TeachingUnitController@index')->name('teachingunits');
    Route::get('unidades-de-ensino/{teachingUnit}/ver', 'TeachingUnitController@show')->name('teachingunits.show');

    Route::get('unidades-de-ensino/adicionar', 'TeachingUnitController@create')->name('teachingunits.create');
    Route::post('unidades-de-ensino', 'TeachingUnitController@store')->name('teachingunits.store');

    Route::get('unidades-de-ensino/{teachingUnit}/editar', 'TeachingUnitController@edit')->name('teachingunits.edit');
    Route::patch('unidades-de-ensino/{teachingUnit}', 'TeachingUnitController@update')->name('teachingunits.update');
    Route::get('unidades-de-ensino/{teachingUnit}/remover', 'TeachingUnitController@destroy')->name('teachingunits.destroy');

    // Níveis de Ensino
    Route::get('niveis-de-ensino', 'EducationLevelController@index')->name('educationlevels');
    Route::get('niveis-de-ensino/{educationLevel}/ver', 'EducationLevelController@show')->name('educationlevels.show');

    Route::get('niveis-de-ensino/adicionar', 'EducationLevelController@create')->name('educationlevels.create');
    Route::post('niveis-de-ensino', 'EducationLevelController@store')->name('educationlevels.store');

    Route::get('niveis-de-ensino/{educationLevel}/editar', 'EducationLevelController@edit')->name('educationlevels.edit');
    Route::patch('niveis-de-ensino/{educationLevel}', 'EducationLevelController@update')->name('educationlevels.update');
    Route::get('niveis-de-ensino/{educationLevel}/remover', 'EducationLevelController@destroy')->name('educationlevels.destroy');

    // Cursos
    Route::get('cursos', 'CourseController@index')->name('courses');
    Route::get('cursos/{course}/ver', 'CourseController@show')->name('courses.show');

    Route::get('cursos/adicionar', 'CourseController@create')->name('courses.create');
    Route::post('cursos', 'CourseController@store')->name('courses.store');

    Route::get('cursos/{course}/editar', 'CourseController@edit')->name('courses.edit');
    Route::patch('cursos/{course}', 'CourseController@update')->name('courses.update');
    Route::get('cursos/{course}/remover', 'CourseController@destroy')->name('courses.destroy');

    // Disciplinas
    Route::get('disciplinas', 'SubjectController@index')->name('subjects');
    Route::get('disciplinas/{subject}/ver', 'SubjectController@show')->name('subjects.show');

    Route::get('disciplinas/adicionar', 'SubjectController@create')->name('subjects.create');
    Route::post('disciplinas', 'SubjectController@store')->name('subjects.store');

    Route::get('disciplinas/{subject}/editar', 'SubjectController@edit')->name('subjects.edit');
    Route::patch('disciplinas/{subject}', 'SubjectController@update')->name('subjects.update');
    Route::get('disciplinas/{subject}/remover', 'SubjectController@destroy')->name('subjects.destroy');

    // Disciplinas
    Route::get('turmas', 'TeachingClassController@index')->name('teachingclasses');
    Route::get('turmas/{teachingClass}/ver', 'TeachingClassController@show')->name('teachingclasses.show');

    Route::get('turmas/adicionar', 'TeachingClassController@create')->name('teachingclasses.create');
    Route::post('turmas', 'TeachingClassController@store')->name('teachingclasses.store');

    Route::get('turmas/{teachingClass}/editar', 'TeachingClassController@edit')->name('teachingclasses.edit');
    Route::patch('turmas/{teachingClass}', 'TeachingClassController@update')->name('teachingclasses.update');
    Route::get('turmas/{teachingClass}/remover', 'TeachingClassController@destroy')->name('teachingclasses.destroy');

    Route::group(array('prefix' => 'professores'), function()
    {
        // Vínculos (Employment Bond)
        Route::get('vinculos', 'EmploymentBondController@index')->name('employmentbonds');
        Route::get('vinculos/{employmentBond}/ver', 'EmploymentBondController@show')->name('employmentbonds.show');

        Route::get('vinculos/adicionar', 'EmploymentBondController@create')->name('employmentbonds.create');
        Route::post('vinculos', 'EmploymentBondController@store')->name('employmentbonds.store');

        Route::get('vinculos/{employmentBond}/editar', 'EmploymentBondController@edit')->name('employmentbonds.edit');
        Route::patch('vinculos/{employmentBond}', 'EmploymentBondController@update')->name('employmentbonds.update');
        Route::get('vinculos/{employmentBond}/remover', 'EmploymentBondController@destroy')->name('employmentbonds.destroy');

        // Regimes (Employment Types)
        Route::get('regimes', 'EmploymentTypeController@index')->name('employmenttypes');
        Route::get('regimes/{employmentType}/ver', 'EmploymentTypeController@show')->name('employmenttypes.show');

        Route::get('regimes/adicionar', 'EmploymentTypeController@create')->name('employmenttypes.create');
        Route::post('regimes', 'EmploymentTypeController@store')->name('employmenttypes.store');

        Route::get('regimes/{employmentType}/editar', 'EmploymentTypeController@edit')->name('employmenttypes.edit');
        Route::patch('regimes/{employmentType}', 'EmploymentTypeController@update')->name('employmenttypes.update');
        Route::get('regimes/{employmentType}/remover', 'EmploymentTypeController@destroy')->name('employmenttypes.destroy');

        // Professores
        Route::get('/', 'ProfessorController@index')->name('professors');
        Route::get('{professor}/ver', 'ProfessorController@show')->name('professors.show');

        Route::get('/adicionar', 'ProfessorController@create')->name('professors.create');
        Route::post('/', 'ProfessorController@store')->name('professors.store');

        Route::get('{professor}/editar', 'ProfessorController@edit')->name('professors.edit');
        Route::patch('{professor}', 'ProfessorController@update')->name('professors.update');
        Route::get('{professor}/remover', 'ProfessorController@destroy')->name('professors.destroy');
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

    Route::get('logs', 'LogController@index');

    Route::get('backups', function() {
        return view('pages.admin.sistema.backups.backups');
    });
});


Auth::routes(['register' => false]);
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

