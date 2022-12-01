<?php


use App\Http\Controllers\PostController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\PhotoController;

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



Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/about', function () {
    return view('home.about');
});

Route::get('/signup', function () {
    return view('home.signup');
});
Route::get('/', function () {
    return view('login');
});

