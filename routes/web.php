<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/online/{slug}', [App\Http\Controllers\OnlineLandingController::class, 'show'])->name('online.landing');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manipal', function () {
    return view('Landing-pages.manipal');
});

Route::get('/sikkim', function () {
    return view('Landing-pages.sikkim');
});
Route::get('/gla', function () {
    return view('Landing-pages.gla');
});
Route::get('/lpu', function () {
    return view('Landing-pages.lpu');
});
Route::get('/amity', function () {
    return view('Landing-pages.amity');
});

