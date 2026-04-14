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

Route::get('/nosotros', [VistasController::class, 'aboutUs'])->name('about-us');

Route::get('/contact-us', [VistasController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [VistasController::class, 'contactStore'])->name('contact.send');

Route::get('/politica-privacidad', [VistasController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terminos-condiciones', [VistasController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/soporte', [VistasController::class, 'support'])->name('support');
Route::get('/documentacion', [VistasController::class, 'documentation'])->name('documentation');
Route::get('/preguntas-frecuentes', [VistasController::class, 'faq'])->name('faq');
