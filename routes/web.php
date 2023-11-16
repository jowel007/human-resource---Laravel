<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [AuthController::class,'index']);
Route::get('forgot-password', [AuthController::class,'forgot_password']);
Route::get('register', [AuthController::class,'register']);
Route::post('register_post', [AuthController::class,'RegisterPost']);
Route::post('checkmail',[AuthController::class,'CheckMail']);


Route::post('login_post',[AuthController::class,'LoginPost']);


// Admin || HR all route

Route::group(['middleware' => 'admin'], function (){
    Route::get('admin/dashboard',[DashboardController::class,'dashboard']);
});

Route::get('logout',[AuthController::class,'logout']);
