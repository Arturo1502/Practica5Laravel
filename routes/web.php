<?php

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
 
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios-create');
Route::post('/usuarios/store', [UsuarioController::class, 'store'])->name('usuarios-store');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios-all');