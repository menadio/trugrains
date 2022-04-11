<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProductController;

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



Route::prefix('admin')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    // Route::get('dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('dashboard');
    
    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'login')->name('login');
    });

    Route::resources([
        'products'  => ProductController::class,
        'recipes'   => RecipeController::class,
        'posts'     => PostController::class
    ], ["as" => "admin"]);
});


Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'index')->name('home');

    Route::get('products', 'products')->name('products');

    Route::get('about', 'about')->name('about-us');

    Route::get('recipes', 'recipes')->name('recipes');

    Route::get('blog', 'blog')->name('blog');

    Route::get('contact', 'contact')->name('contact');
});
