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

Route::prefix('user')->group(function() {
    Route::get('/', 'UserController@index');
});

Route::prefix('guru')->middleware(['web', 'auth'])->group(function() {
    Route::get('list', 'TeacherController@index');
    Route::get('create', 'TeacherController@create');
    Route::get('edit', 'TeacherController@edit');
});
