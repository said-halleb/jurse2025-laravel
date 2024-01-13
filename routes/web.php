<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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



Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/links/{id}', [HomeController::class, 'show'])->name('home.show');
Route::get('/links/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/links', [HomeController::class, 'store'])->name('home.store');
Route::get('/links/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/links/{id}', [HomeController::class, 'update'])->name('home.update');
Route::delete('/links/{id}', [HomeController::class, 'destroy'])->name('home.destroy');