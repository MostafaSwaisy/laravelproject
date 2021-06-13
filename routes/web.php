<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
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
    return view('home/index');
});
//BookController
Route::get('/book/index', [BookController::class,'index'])->middleware('auth');
Route::get('/book/create', [BookController::class,'create'])->middleware('auth');
Route::get('/book/edit/{id}', [BookController::class,'edit'])->middleware('auth');
//actions
Route::post('/book/store', [BookController::class,'store'])->middleware('auth');
Route::post('/book/update/{id}', [BookController::class,'update'])->middleware('auth');
Route::get('/book/delete/{id}', [BookController::class,'delete'])->middleware('auth');

//WriterController
Route::get('/writer/index', [WriterController::class,'index'])->middleware('auth');
Route::get('/writer/create', [WriterController::class,'create'])->middleware('auth');
Route::get('/writer/edit/{id}', [WriterController::class,'edit'])->middleware('auth');
//actions
Route::post('/writer/store', [WriterController::class,'store'])->middleware('auth');
Route::post('/writer/update/{id}', [WriterController::class,'update'])->middleware('auth');
Route::get('/writer/destroy/{id}', [WriterController::class,'destroy'])->middleware('auth');

//publisherController
Route::get('/publisher/index', [publisherController::class,'index'])->middleware('auth');
Route::get('/publisher/create', [publisherController::class,'create'])->middleware('auth');
Route::get('/publisher/edit/{id}', [publisherController::class,'edit'])->middleware('auth');
//actions
Route::post('/publisher/store', [publisherController::class,'store'])->middleware('auth');
Route::post('/publisher/update/{id}', [publisherController::class,'update'])->middleware('auth');
Route::get('/publisher/destroy/{id}', [publisherController::class,'destroy'])->middleware('auth');

//search
Route::get('/search/index', [SearchController::class,'index']);
Route::get('/search/index/{$search}', [SearchController::class,'index']);

//CategoryController
Route::get('/category/index', [CategoryController::class,'index'])->middleware('auth');
Route::get('/category/create', [CategoryController::class,'create'])->middleware('auth');
Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->middleware('auth');
//actions
Route::post('/category/store', [CategoryController::class,'store'])->middleware('auth');
Route::post('/category/update/{id}', [CategoryController::class,'update'])->middleware('auth');
Route::get('/category/destroy/{id}', [CategoryController::class,'destroy'])->middleware('auth');
//make auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
