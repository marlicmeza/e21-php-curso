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
    return view('welcome2');
});

Route::get('/denize', function () {
    return view('denize');
});

Route::get('/alunos', function () {
    return view('alunos');
});

Route::get('/navegacao', function () {
    return view('navegacao');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/navbar', function () {
    return view('navbar');
});

