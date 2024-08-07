<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SporadikController;


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

Route::get('/layoutadmin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/masyarakat', [MasyarakatController::class, 'index'])->middleware('auth');
Route::get('/masyarakat/form/', [MasyarakatController::class, 'create'])->middleware('auth');
Route::post('/masyarakat/store/', [MasyarakatController::class, 'store'])->middleware('auth');
Route::get('/masyarakat/edit/{id}', [MasyarakatController::class, 'edit'])->middleware('auth');
Route::put('/masyarakat/{id}', [MasyarakatController::class, 'update'])->middleware('auth');
Route::delete('/masyarakat/{id}', [MasyarakatController::class, 'destroy'])->middleware('auth');

Route::get('/petugas', [PetugasController::class, 'index'])->middleware('auth');
Route::get('/petugas/form/', [PetugasController::class, 'create'])->middleware('auth');
Route::post('/petugas/store/', [PetugasController::class, 'store'])->middleware('auth');
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit'])->middleware('auth');
Route::put('/petugas/{id}', [PetugasController::class, 'update'])->middleware('auth');
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->middleware('auth');

Route::get('/sporadik', [SporadikController::class, 'index'])->middleware('auth');
Route::get('/sporadik/form/', [SporadikController::class, 'create'])->middleware('auth');
Route::post('/sporadik/store/', [SporadikController::class, 'store'])->middleware('auth');
Route::get('/sporadik/edit/{id}', [SporadikController::class, 'edit'])->middleware('auth');
Route::put('/sporadik/{id}', [SporadikController::class, 'update'])->middleware('auth');
Route::delete('/sporadik/{id}', [SporadikController::class, 'destroy'])->middleware('auth');


