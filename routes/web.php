<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::middleware('web:auth')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::post('logout', [LoginController::class, 'logout']);
});

Router::middleware('guest')->group(function() {
    Route::get('login', [LoginController::class, 'login']);
    Route::post('login', [LoginController::class, 'authenticate']);
});
