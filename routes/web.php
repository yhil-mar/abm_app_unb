<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthenticatedSessionController::class, 'create']);

Route::get('/register', [RegisteredUserController::class, 'create']);

// Route::get('/users', [UsuarioController::class, 'index']);

// Route::get('/users/edit/{usuario}', [UsuarioController::class, 'edit']);

// Route::get('/users/create', [UsuarioController::class, 'create']);

Route::resource('/users', UsuarioController::class);