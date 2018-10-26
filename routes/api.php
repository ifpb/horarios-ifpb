<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(array('prefix' => 'tabelas'), function()
{
    Route::get('reservas-da-sala/{classroom}', 'ApiViewController@getTableClassroomReservations')->name('api.tabelas.reservas-da-sala');
    Route::get('reserva-de-sala/{classroom}/{teachingClass}', 'ApiViewController@getTableReserveClassroom')->name('api.tabelas.reserva-de-sala');
});

Route::group(array('prefix' => 'info'), function()
{
    Route::get('salas-do-bloco/{block}', 'ApiController@getBlockClassrooms')->name('api.infos.salas-do-bloco');
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
