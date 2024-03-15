<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignarHorarioController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\SalonesController;
use App\Http\Controllers\WelcomeController;


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
    return view('template');
});

// Rutas Login
Route::get('/login', [LoginController::class, 'login'])->name('login.login');
Route::get('/olvidocontrasenia', [LoginController::class, 'olvidocontrasenia'])->name('asignarhorario.asignarhorario');

// Ruta welcome
Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');


// Rutas AsignarHorario
Route::get('/asignarhorario', [AsignarHorarioController::class, 'asignarHorario'])->name('asignarhorario.asignarhorario');

// Rutas Horarios
Route::get('/horarios', [HorariosController::class, 'horarios'])->name('horarios.horarios');

// Rutas Cursos
Route::get('/cursos', [CursosController::class, 'cursos'])->name('cursos.pensum');
Route::get('/campocomun', [CursosController::class, 'campocomun'])->name('cursos.campocomun');

// Rutas Docente
Route::get('/docente', [DocenteController::class, 'docente'])->name('docente.docente');

// Rutas Salones
Route::get('/salones', [SalonesController::class, 'salones'])->name('salones.salones');



