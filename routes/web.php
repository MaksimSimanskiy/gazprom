<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('main');
}) -> name('main');
Route::get('/main', function () {
    return view('main');
}) -> name('major');
Route::get('/reg', function () {
    return view('reg');
}) -> name('reg');
Route::get('/admin', function () {
    return view('admin');
}) -> name('');
Route::put('/admin', function () {
    return view('admin');
}) -> name('admin');
Route::post('/admin', [AdminController::class, 'updateCity']) ->name('admin');
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::post('/form', [MainController::class, 'add']) ->name('form');

