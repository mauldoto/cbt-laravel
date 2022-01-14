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

Route::prefix('mapel')->middleware(['web', 'auth'])->group(function() {
    Route::get('list', 'SubjectController@index');
    Route::get('create', 'SubjectController@create');
    Route::post('store', 'SubjectController@store');
});
