<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookscontroller;

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

Route::get('/', function(){
    return view('layout');
});

Route::resource('/books',bookscontroller::class);
Route::get("search",[bookscontroller::class,'search']);



Route::get('/', function () {
    return redirect()->route('books.index');
});
Route::resource('books', BooksController::class)->names('books');

Route::get("search",[bookscontroller::class,'search']);