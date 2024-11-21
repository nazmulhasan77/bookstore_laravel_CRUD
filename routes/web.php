<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

//for index controller
Route::get('/', [BookController::class, 'index']) -> name('books.index') ;

//for showing book information
Route::get('books/show/{id}', [BookController::class, 'show'])->name('books.show') ;
//for creating a new book
Route::get('books/create', [BookController::class, 'create'])->name('books.create') ;
//for storing a new book data into the database
Route::post('/books', [BookController::class, 'store'])->name('books.store') ;


//for editing a book
Route::get('books/edit/{id}', [BookController::class, 'edit'])->name('books.edit') ;
Route::post('books/update', [BookController::class,'update'])->name('books.update') ;


//for deleting a book
Route::delete('books/delete', [BookController::class, 'destroy'])->name('books.destroy') ;
