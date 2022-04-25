<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\issueController;
use App\Http\Controllers\usersController;


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

// Route::get('/', [librosController::class, 'index'])->name('libros.index');


/*********************************** RUTAS PARA LOS LIBROS ***********************************/
/* Ver todas las incidencias */
Route::get('/incidencias', [issueController::class, 'index'])->name('incidencias.index');

/* Crear una incidencia */
Route::get('/incidencias/crear', [issueController::class, 'create'])->name('incidencias.index')->middleware(['auth']);
Route::post('/incidencias/crear', [issueController::class, 'store'])->name('incidencias.store')->middleware(['auth']);

/* Editar una incidencia (por ID) */
Route::get('/incidencias/editar/{id}', [issueController::class, 'edit'])->name('incidencias.edit')->middleware(['auth']);
Route::put('/incidencias/editar/{id}', [issueController::class, 'update'])->name('incidencias.update')->middleware(['auth']);


/*********************************** RUTAS PARA LOS LIBROS ***********************************/
Route::get('/perfil', [usersController::class, 'index'])->name('usuarios.index');

Route::get('/administracion/incidencias', [issueController::class, 'admin'])->name('incidencias.admin');
Route::get('/administracion/usuarios', [usersController::class, 'admin'])->name('usuarios.admin');


/************************************* RUTAS PARA LOS PDF ************************************/
Route::get('/libros/PDF', [librosController::class, 'librosPDF']);
Route::get('/libros/PDF/{id}', [librosController::class, 'libroPDF']);
/*********************************************************************************************/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
