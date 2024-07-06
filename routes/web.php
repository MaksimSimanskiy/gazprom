<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
Route::get('/', function () {
    return view('main');
}) -> name('main');
Route::get('/main', function () {
    return view('main');
}) -> name('major');
Route::get('/reg', function () {
    return view('reg');
}) -> name('reg');

Route::post('/form', [MainController::class, 'add']) ->name('form');

