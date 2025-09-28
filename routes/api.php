<?php

use App\Http\Controllers\Api\AppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post("/login", [AuthController::class, 'login']);
//get sin auth
Route::get('preguntas',[AppController::class, 'preguntas']);
Route::get('registrar',[AppController::class, 'registrar']);

