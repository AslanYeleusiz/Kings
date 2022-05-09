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
    return view('pages.main');
});
Route::get('/authorization', function () {
    return view('pages.auth');
});
Route::get('/sign-up', function () {
    return view('pages.enroll');
});
Route::get('/school', function () {
    return view('pages.openwait');
});
Route::get('/books', function () {
    return view('pages.books');
});
Route::get('/travel', function () {
    return view('pages.travels');
});
Route::get('/contact', function () {
    return view('pages.openwait');
});
