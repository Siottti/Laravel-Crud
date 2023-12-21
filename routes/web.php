<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
Route::get('/Product', function () {
    return view('Product');
});

Route::get('/', function () {
    return view('test');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/appointment', function () {
    return view('appointment');
});


Route::get('/registration', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/product', function () {
    return view('product');
});


Route::post('/request-json', [HomeController::class, 'getProfile']);


Route::post('/create-profile', [ProfileController::class, 'create']);


Route::post('/create_signups', [SignupController::class, 'signup']);
Route::post('/appointment', [AppointmentController::class, 'Appointment']);



Route::get('/getappointment', [AppointmentController::class, 'getData']);
Route::get('/displayData', [ProductController::class, 'displayData']);



Route::get('/getprofile', [ProfileController::class, 'getlist']);
Route::post('/create-registration', [RegistrationController::class, 'registration']);
Route::post('/login', [RegistrationController::class, 'login']);
Route::post('/store', [RegistrationController::class, 'store']);
Route::post('/Product', [ProductController::class, 'create']);
Route::post('/Product', [ProductController::class, 'update']);
Route::post('/ProductDelete', [ProductController::class, 'delete']);


