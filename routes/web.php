<?php

use App\Http\Controllers\jadwalController;
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

Route::get('/', [jadwalController::class, 'index'])->name('index');

Route::get('/search', [jadwalController::class, 'search'])->name('search'); 

Route::get('/matkul/{Matkul}', [jadwalController::class, 'matkul'])->name('matkul');


Route::get('/done', [jadwalController::class, 'done'])->name('done');