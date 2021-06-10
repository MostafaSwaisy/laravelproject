<?php
use App\Http\Controllers\BookController;

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
Route::get('/book/index', [BookController::class,'index']);
Route::get('/book/create', [BookController::class,'create']);
Route::get('/book/edit/{id}', [BookController::class,'edit']);

Route::post('/book/store', [BookController::class,'store']);
Route::post('/book/update/{id}', [BookController::class,'update']);
Route::get('/book/delete/{id}', [BookController::class,'delete']);
