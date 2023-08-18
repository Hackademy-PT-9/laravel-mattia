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

Route::get('/', [RouteController::class, 'homepage'])->name('homepage');

Route::get('/about', [RouteController::class, 'about'])->name('about');

Route::get('/services', [RouteController::class, 'services'])->name('services');

Route::get('/services/{detail}', [RouteController::class, 'detail'])->name('detail');

Route::get('/contact', [RouteController::class, 'contact'])->name('contact');

//route per il test front end
Route::get('/test', function(){
    return view('test');
})->name('test');