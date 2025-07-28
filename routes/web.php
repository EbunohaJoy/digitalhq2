<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PortfolioController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [PostController::class, 'home'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', [PortfolioController::class,'showportfolio'])->name('portfolio');
Route::view('/blog', 'blog')->name('blog');
Route::get('/post/{id}', [PostController::class, 'showfullpost'])->name('post.show');


