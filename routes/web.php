<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\BusquedaController;
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

Route::get('/', HomeController::class)->name('home');

Route::controller(ProductoController::class)->group(function () {
    Route::get('/productos', 'index')->name('productos.index');
    Route::post('/productos', 'store')->name('productos.store');
    Route::get('/productos/create',  'create')->name('productos.create')->middleware(['auth'])->middleware(['role:administrador']);
    Route::get('/productos/{producto}', 'show')->name('productos.show')->middleware(['auth']);
    Route::put('/productos/{producto}', 'update')->name('productos.update')->middleware(['auth'])->middleware(['role:administrador']);
    Route::delete('/productos/{producto}', 'destroy')->name('productos.destroy')->middleware(['auth'])->middleware(['role:administrador']);
    Route::get('/productos/{producto}/edit', 'edit')->name('productos.edit')->middleware(['auth'])->middleware(['role:administrador']);
});

Route::controller(BusquedaController::class)->group(function () {
    Route::post('/productos/buscar/{categoria?}', 'buscar')->name('busquedas.buscar');

});

Route::controller(CategoriaController::class)->group(function () {
    Route::get('/categorias', 'index')->name('categorias.index');
    Route::post('/categorias', 'store')->name('categorias.store');
    Route::get('/categorias/create',  'create')->name('categorias.create')->middleware(['auth'])->middleware(['role:administrador']);
    Route::get('/categorias/{categoria}', 'show')->name('categorias.show');
    Route::put('/categorias/{categoria}', 'update')->name('categorias.update')->middleware(['auth'])->middleware(['role:administrador']);
    Route::delete('/categorias/{categoria}', 'destroy')->name('categorias.destroy')->middleware(['auth'])->middleware(['role:administrador']);
    Route::get('/categorias/{categoria}/edit', 'edit')->name('categorias.edit')->middleware(['auth'])->middleware(['role:administrador']);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/cesta', 'index')->name('users.index')->middleware(['auth'])->middleware(['role:cliente']);
    Route::post('/inicio', 'store')->name('users.store');
    Route::get('/inicio', 'create')->name('users.create');
    Route::delete('/cesta/{compra}', 'destroy')->name('users.destroy')->middleware(['auth'])->middleware(['role:cliente']);
    Route::put('/cesta', 'update')->name('users.update')->middleware(['auth'])->middleware(['role:cliente']);
    Route::post('/cesta/{producto}', 'edit')->name('users.edit')->middleware(['auth'])->middleware(['role:cliente']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware(['auth']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware(['auth']);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware(['auth']);
    Route::get('/logout', [ProfileController::class, 'logout'])->name('profile.logout')->middleware(['auth']);
});

require __DIR__.'/auth.php';
