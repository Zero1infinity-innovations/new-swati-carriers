<?php

use App\Http\Controllers\backendController\AdminController;
use App\Http\Controllers\frontend\HomeController;
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

// frontend routes

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/feedback',[HomeController::class,'feedback'])->name('feedback');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

// feedback store

Route::post('/feedbackStore',[HomeController::class,'feedbackStore'])->name('sendFeedback');
Route::post('/contactStore',[HomeController::class,'contactStore'])->name('sendContact');


// backend routes
Route::get('/admin',[AdminController::class,'AdminLogin'])->name('AdminLogin');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('Dashboard');

