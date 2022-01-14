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

Route::prefix('kategori')->middleware(['web', 'auth'])->group(function() {
    Route::get('list', 'CategoryController@index');
    Route::get('create', 'CategoryController@create');
});
