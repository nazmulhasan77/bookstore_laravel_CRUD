<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

//for index controller
Route::get('/', [BookController::class, 'index']) -> name('books.index') ;

//for showing book information
Route::get('books/show/{id}', [BookController::class, 'show'])->name('show.index') ;
