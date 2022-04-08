<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'index')->name('home');

    Route::get('products', 'products')->name('products');

    Route::get('about', 'about')->name('about-us');
});
