<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\bukuController;

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

#route untuk Buku
Route::middleware(['auth'])->group(function () {
    Route::get('/buku', [bukuController::class, 'index']);
    Route::get('/buku/tambah', [bukuController::class, 'create']);
    Route::post('/buku', [bukuController::class, 'store']);
    Route::get('/buku/edit/{id}', [bukuController::class, 'edit']);
    Route::put('/buku/{id}', [bukuController::class, 'update']);
    Route::delete('/buku/{id}', [bukuController::class, 'destroy']);
});