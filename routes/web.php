<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\publisherController;
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

Route::get('/test', function () {
    return view('layout');
});
//BookController
Route::get('/book/index', [BookController::class,'index']);
Route::get('/book/create', [BookController::class,'create']);
Route::get('/book/edit/{id}', [BookController::class,'edit']);
//actions
Route::post('/book/store', [BookController::class,'store']);
Route::post('/book/update/{id}', [BookController::class,'update']);
Route::get('/book/delete/{id}', [BookController::class,'delete']);

//WriterController
Route::get('/writer/index', [WriterController::class,'index']);
Route::get('/writer/create', [WriterController::class,'create']);
Route::get('/writer/edit/{id}', [WriterController::class,'edit']);
//actions
Route::post('/writer/store', [WriterController::class,'store']);
Route::post('/writer/update/{id}', [WriterController::class,'update']);
Route::get('/writer/destroy/{id}', [WriterController::class,'destroy']);


//publisherController
Route::get('/publisher/index', [publisherController::class,'index']);
Route::get('/publisher/create', [publisherController::class,'create']);
Route::get('/publisher/edit/{id}', [publisherController::class,'edit']);
//actions
Route::post('/publisher/store', [publisherController::class,'store']);
Route::post('/publisher/update/{id}', [publisherController::class,'update']);
Route::get('/publisher/destroy/{id}', [publisherController::class,'destroy']);
