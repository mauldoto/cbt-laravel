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

Route::prefix('kelas')->middleware(['web', 'auth'])->group(function() {
    Route::get('list', 'GradeController@index');
    Route::get('create', 'GradeController@create');
    Route::get('edit/{grade}', 'GradeController@edit');

    Route::post('store', 'GradeController@store');
    Route::post('update/{grade}', 'GradeController@update');
    Route::post('destroy/{grade}', 'GradeController@destroy');
});
