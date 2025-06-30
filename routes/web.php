<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Rutas para configuraciones
Route::get('/admin/configuracion', [App\Http\Controllers\ConfiguracionController::class, 'index'])
    ->name('admin.configuracion.index')
    ->middleware('auth');

// Rutas para roles
Route::get('/admin/roles/reporte', [App\Http\Controllers\RoleController::class, 'reporte'])->name('admin.roles.reporte')->middleware('auth', 'can:Ver reporte de roles');
Route::post('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'create'])->name('admin.roles.create')->middleware('auth', 'can:Crear rol');
Route::post('/admin/roles/store', [App\Http\Controllers\RoleController::class, 'store'])->name('admin.roles.store')->middleware('auth');
Route::get('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('admin.roles.show')->middleware('auth', 'can:Ver datos del rol');
Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('admin.roles.edit')->middleware('auth', 'can:Editar rol');
Route::put('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('admin.roles.update')->middleware('auth');
Route::get('/admin/roles/{id}/asignar', [App\Http\Controllers\RoleController::class, 'asignar'])->name('admin.roles.asignar')->middleware('auth');
Route::put('/admin/roles/{id}/update_asignar', [App\Http\Controllers\RoleController::class, 'update_asignar'])->name('admin.roles.update_asignar')->middleware('auth');
Route::delete('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('admin.roles.destroy')->middleware('auth', 'can:Eliminar rol');


