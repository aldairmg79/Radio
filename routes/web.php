<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodcastsController;
use App\Http\Controllers\IntegrantesController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\UsuariosController;
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
    return view('welcome');
});

Route::get('prueba', function () {
    return view('prueba');
});

Route::resource('podcasts', PodcastsController::class);
Route::resource('integrantes', IntegrantesController::class);
Route::resource('programas', ProgramasController::class);
Route::resource('usuarios', UsuariosController::class);
Route::resource('eventos', UsuariosController::class);
Route::resource('menu', PodcastsController::class);
