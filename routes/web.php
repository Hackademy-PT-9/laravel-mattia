<?php

use App\Http\Controllers\RouteController;
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

Route::get('/', [RouteController::class, ('homepage')])->name('homepage');
//rotta test
Route::get('/test', function () {
    return view('components.test');
})->name('test');

Route::get('/about', [RouteController::class, ('about')])->name('about');

Route::get('/contact', [RouteController::class, ('contact')])->name('contact');

Route::get('/service', [RouteController::class, ('service')])->name('service');