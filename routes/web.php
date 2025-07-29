<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/sitemap', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/services'))
        ->add(Url::create('/about'))
        ->add(Url::create('/portfolio'));

    $sitemap->writeToFile(public_path('sitemap.xml'));
    return 'Sitemap created';
});



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [PostController::class, 'home'])->name('home');
Route::view('/about', 'about')->name('about');
// Route::view('/services', 'services')->name('services');
Route::get('/service', [ServiceController::class, 'services'])->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', [PortfolioController::class,'showportfolio'])->name('portfolio');
Route::view('/blog', 'blog')->name('blog');
// Route::get('/post/{id}', [PostController::class, 'showfullpost'])->name('post.show');
Route::get('/post/{slug}', [PostController::class, 'showfullpost'])->name('post.show');



