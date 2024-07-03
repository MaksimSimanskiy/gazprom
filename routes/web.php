<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
Route::get('/', function () {
    return view('main');
}) -> name('main');
Route::get('/main', function () {
    return view('main');
}) -> name('main');
Route::get('/reg', function () {
    return view('reg');
}) -> name('reg');

Route::get('/review', [MainController::class, 'home']) -> name('/review');
Route::get('/home', 'MainController@home');

Route::post('/review/check', [MainController::class, 'review_check']);
Route::get('/user/{id}/{name}', function ($id,$name) {
    return view('about');
});
