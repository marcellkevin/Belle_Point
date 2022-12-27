<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketingController;
use Illuminate\Support\Facades\Route;

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
// route halaman awal
// Route::get('/', function () {
//     return view('loginView');
// });

// route login
Route::get('/', [UserController::class, 'LoginView']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/adminView', [LoginController::class, 'adminView']);
Route::get('/marketingView', [LoginController::class, 'marketingView']);


Route::get('/adminAddUser', [UserController::class, 'adminAddUserView']);
Route::get('/adminListUser', [UserController::class, 'adminListUserView']);
Route::get('/adminGenerateVoucher', [UserController::class, 'adminGenerateVoucherView']);
Route::post('/generateVoucher', [AdminController::class, 'generateVoucher']);
Route::post('/addUser', [AdminController::class, 'addUser']);


Route::get('/adminAddBank', [UserController::class, 'adminAddBankView']);
Route::get('/adminListBank', [UserController::class, 'adminListBankView']);
Route::post('/addBank', [AdminController::class, 'addBank']);


//Admin Transaction
Route::get('/adminAddPoint',[UserController::class,'adminAddPointView']);
Route::get('/addPoint',[UserController::class,'addPoint']);



Route::get('/test/purchase', 'OtpController@confirmationPage');
Route::post('/test/otp-request', 'OtpController@requestForOtp')->name('requestForOtp');
Route::post('/test/otp-validate', 'OtpController@validateOtp')->name('validateOtp');
Route::post('/test/otp-resend', 'OtpController@resendOtp')->name('resendOtp');


Route::get('/addCustomer', [MarketingController::class, 'addCustomer']);
Route::get('/marketingAddCustomerView', [MarketingController::class, 'marketingAddCustomerView']);


//setting
Route::get('/setting', [UserController::class, 'settingView']);
Route::post('/konversiPoin', [AdminController::class, 'konversiPoin']);