<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;

Route::get('/home', [BookController::class,'index'])->name('home');
Route::get('/book/{bookid}', [BookController::class, 'get'])->name('book-detail');

Route::get('/category', [CategoryController::class,'index'])->name('category');
Route::get('/category/{categoryid}', [CategoryController::class, 'get'])->name('category-detail');

Route::get('/publisher', [PublisherController::class,'index'])->name('publisher');
Route::get('/publisher/{publisherid}', [PublisherController::class, 'get'])->name('publisher-detail');

Route::get('/contact', )->name('publisher');
Route::get('/contact', function(){return view('contact');})->name('contact');