<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', function () {
    return view('extends.cat-extend');
})->name('extends.cat-extend');

Route::get('/anime-details', function () {
    return view('extends.det-extend');
})->name('extends.det-extend');

Route::get('/anime-watching', function () {
    return view('extends.watch-extend');
})->name('extends.watch-extend');

Route::get('/blog-details', function () {
    return view('extends.blog-extend');
})->name('extends.blog-extend');

Route::get('/signup', function () {
    return view('extends.sign-extend');
})->name('extends.sign-extend');

Route::get('/login', function () {
    return view('extends.login-extend');
})->name('extends.login-extend');

Route::get('/blog', function () {
    return view('extends.our-blog-extend');
})->name('extends.our-blog-extend');


