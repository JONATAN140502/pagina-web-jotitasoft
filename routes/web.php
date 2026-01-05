<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;

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

Route::get('/', [VistasController::class, 'index'])->name('home');

Route::get('/about-us', [VistasController::class, 'aboutUs'])->name('about-us');

Route::get('/contact-us', [VistasController::class, 'contactUs'])->name('contact-us');
