<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\registrationcontroller;


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

Route::get('/facilities', function () {
    return view('facilities');
});
Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});


//Route::get('/about','App\Http\Controllers\mycontroller@about1' );

Route::get('/register',[registrationcontroller::class, 'index']);
Route::post('/register', [registrationcontroller::class, 'register']);