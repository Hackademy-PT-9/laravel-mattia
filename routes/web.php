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

Route::get('/homepage', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/siti', function () {
    return view('siti');
})->name('siti');

Route::get('/marketing', function () {
    return view('marketing');
})->name('marketing');

Route::get('/gestionali', function () {
    return view('gestionali');
})->name('gestionali');

Route::get('/eCommerce', function () {
    return view('eCommerce');
})->name('eCommerce');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');