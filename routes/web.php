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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/result', [App\Http\Controllers\HomeController::class, 'result'])->name('result');

Route::get('/pdf', [App\Http\Controllers\HomeController::class, 'generateQrs'])->name('pdf');
Route::get('/incorrect', [App\Http\Controllers\HomeController::class, 'incorrect'])->name('incorrect');
Route::get('/correct', [App\Http\Controllers\HomeController::class, 'correct'])->name('correct');
Route::get('/product/{code}', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/qrs', [App\Http\Controllers\HomeController::class, 'generateQr'])->name('qrs');

