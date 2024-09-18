<?php

use App\Http\Controllers\backendController\AdminController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'AdminLogin'])->name('login');        //loging
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');   //Dashboard
    
    // services routes
    Route::get('/services', [AdminController::class, 'services'])->name('services');        
    Route::post('/saveService', [AdminController::class, 'saveServices'])->name('saveServices');
    Route::post('/showServiceDetails/{id}', [AdminController::class, 'showServiceDetails'])->name('showServiceDetails');
    Route::post('/changeServiceStatus', [AdminController::class, 'changeServivceStatus'])->name('changeServivceStatus');
    Route::get('/deleteService/{id}', [AdminController::class, 'deleteService'])->name('deleteService');

    // booked services routes
    Route::get('/bookedServices', [AdminController::class, 'bookedServices'])->name('bookedServices');
    Route::get('/addBookedServicePage', [AdminController::class, 'addBookedServicePage'])->name('addBookedServicePage');
    // Route::post('/cancelServiceBooking/{id}', [AdminController::class, 'cancelServiceBooking'])->name('cancelServiceBooking');

    // // clients routes
    // Route::get('/clients', [AdminController::class, 'clients'])->name('clients');
    // Route::post('/showClientDetails/{id}', [AdminController::class, 'showClientDetails'])->name('showClientDetails');
    // Route::get('/deleteClient/{id}', [AdminController::class, 'deleteClient'])->name('deleteClient');
    
});