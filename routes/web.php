<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

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

/*
|
| Old
|
Route::get('/', [ViewsController::class, 'welcome'])->name('home');
Route::get('/about', [ViewsController::class, 'about'])->name('about');
Route::get('/portfolio', [ViewsController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [ViewsController::class, 'contact'])->name('contact');
Route::post('/sendMail', [ViewsController::class, 'sendMail'])->name('sendMail');
*/

Route::get('/', [ViewsController::class, 'nouLanding'])->name('nouLanding');
Route::get('/about', [ViewsController::class, 'nouAbout'])->name('nouAbout');
Route::get('/experience', [ViewsController::class, 'experience'])->name('experience');
Route::get('/formation', [ViewsController::class, 'formation'])->name('formation');