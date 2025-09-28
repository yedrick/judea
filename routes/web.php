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

// Route::get('/', function () {
//     $grupos = \App\Models\Group::get();
//     return view('register_user',['grupos' => $grupos]);
// });

Route::get('/', [App\Http\Controllers\QrUserController::class, 'register'])->name('register');

Auth::routes();



// Route::prefix('/process')->group(function () {
//     Route::post('/excel', [App\Http\Controllers\ProcessController::class, 'uploadExcel'])->name('home');
//     Route::post('/excel-crm', [App\Http\Controllers\ProcessController::class, 'uploadExcelCrm'])->name('home');

//     Route::get('/vote/{campa_id}', [App\Http\Controllers\ProcessController::class, 'vote'])->name('vote');
// });

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/group', [App\Http\Controllers\QrUserController::class, 'indexGroup'])->name('group');
Route::get('/group/create', [App\Http\Controllers\QrUserController::class, 'createGroup'])->name('group.create');
Route::post('/group/store', [App\Http\Controllers\QrUserController::class, 'storeGroup'])->name('group.store');
Route::get('/group/edit/{id}', [App\Http\Controllers\QrUserController::class, 'editGroup'])->name('group.edit');
Route::post('/group/update/{id}', [App\Http\Controllers\QrUserController::class, 'updateGroup'])->name('group.update');
Route::get('/group/destroy/{id}', [App\Http\Controllers\QrUserController::class, 'destroyGroup'])->name('group.destroy');

// preguntas
Route::get('/question', [App\Http\Controllers\QrUserController::class, 'indexQuestion'])->name('question');
Route::get('/question/create', [App\Http\Controllers\QrUserController::class, 'createQuestion'])->name('question.create');
Route::post('/question/store', [App\Http\Controllers\QrUserController::class, 'storeQuestion'])->name('question.store');

//qr
Route::get('/qr', [App\Http\Controllers\QrController::class, 'index'])->name('qr');
Route::get('/qr/create', [App\Http\Controllers\QrController::class, 'create'])->name('qr.create');
Route::post('/qr/store', [App\Http\Controllers\QrController::class, 'store'])->name('qr.store');
Route::get('/qr/edit/{id}', [App\Http\Controllers\QrController::class, 'edit'])->name('qr.edit');
Route::post('/qr/update/{id}', [App\Http\Controllers\QrController::class, 'update'])->name('qr.update');


// Route::get('/question/edit/{id}', [App\Http\Controllers\QrUserController::class, 'editQuestion'])->name('question.edit');
// Route::post('/question/update/{id}', [App\Http\Controllers\QrUserController::class, 'updateQuestion'])->name('question.update');
Route::get('/question/destroy/{id}', [App\Http\Controllers\QrUserController::class, 'destroyQuestion'])->name('question.destroy');
Route::get('/question/show/{id}', [App\Http\Controllers\QrUserController::class, 'showQuestion'])->name('question.show');

Route::get('/question/qr/{code}', [App\Http\Controllers\QrUserController::class, 'showQuestionQr'])->name('question.qr');
Route::post('/question/answer/{code}', [App\Http\Controllers\QrUserController::class, 'answerQuestion'])->name('question.answer');

Route::get('/generate-qrs', [App\Http\Controllers\QrUserController::class, 'generateQrs'])->name('genrate.qrs');
Route::get('/generate-question-qrs', [App\Http\Controllers\QrUserController::class, 'generateQuestionQrs'])->name('genrate.question.qrs');

// registro de usuarios solo name y email
Route::get('/register-get', [App\Http\Controllers\QrUserController::class, 'register'])->name('register.participante');
Route::post('/register-participante', [App\Http\Controllers\QrUserController::class, 'registerPost'])->name('register.post');

// Route::get('/male', [App\Http\Controllers\HomeController::class, 'viewMale'])->name('male');
// Route::get('/female', [App\Http\Controllers\HomeController::class, 'viewFemale'])->name('female');
// Route::get('/free', [App\Http\Controllers\HomeController::class, 'free'])->name('free');
// Route::get('/result', [App\Http\Controllers\HomeController::class, 'result'])->name('result');
// Route::get('/excel', [App\Http\Controllers\HomeController::class, 'excel'])->name('excel');
// Route::get('/excel-crm', [App\Http\Controllers\HomeController::class, 'excelCrm'])->name('excel');
// Route::get('/pdf', [App\Http\Controllers\HomeController::class, 'generateQrs'])->name('pdf');
Route::get('/incorrect', [App\Http\Controllers\HomeController::class, 'incorrect'])->name('incorrect');
Route::get('/correct', [App\Http\Controllers\HomeController::class, 'correct'])->name('correct');
Route::get('/qrs/{code}', [App\Http\Controllers\HomeController::class, 'search'])->name('search.qrs');
// Route::get('/qrs', [App\Http\Controllers\HomeController::class, 'generateQr'])->name('qrs');
