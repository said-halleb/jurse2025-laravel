<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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
Route::post('/', [HomeController::class, 'submitForm']);

Route::get('/links/{id}', [HomeController::class, 'show'])->name('home.show');
Route::get('/links/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/links', [HomeController::class, 'store'])->name('home.store');
Route::get('/links/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/links/{id}', [HomeController::class, 'update'])->name('home.update');
Route::delete('/links/{id}', [HomeController::class, 'destroy'])->name('home.destroy');



// routes/web.php



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    Route::get('/manageMedia', [AdminController::class, 'manageMedia'])->name('admin.manageMedia');
    Route::post('/add-media', [AdminController::class, 'addMedia'])->name('admin.addMedia');
    Route::put('/update-media/{id}', [AdminController::class, 'updateMedia'])->name('admin.updateMedia');
    Route::delete('/delete-media/{id}', [AdminController::class, 'deleteMedia'])->name('admin.deleteMedia');
    Route::get('/manageSponcor', [AdminController::class, 'manageSponcor'])->name('admin.manageSponcor');
    Route::post('/add-sponcor', [AdminController::class, 'addSponcor'])->name('admin.addSponcor');
    Route::delete('/delete-sponcor/{id}', [AdminController::class, 'deleteSponcor'])->name('admin.deleteSponcor');
    Route::get('/manageSpeaker' , [AdminController::class,'manageSpeaker'])->name('admin.manageSpeaker');
    Route::post('/addSpeaker', [AdminController::class,'addSpeaker'])->name('admin.addSpeaker');
    Route::get('/dashboard', [AdminController::class, 'showOtherView'])->name('dashboard');
    Route::delete('/delete-Speaker/{id}', [AdminController::class, 'deleteSpeaker'])->name('admin.deleteSpeaker');

    
});


require __DIR__.'/auth.php';
