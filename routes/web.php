<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Backend\JobHistoryController;
use App\Http\Controllers\Backend\JobGradesController;
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

    Route::get('admin/employee', [EmployeeController::class,'index']);
    Route::get('admin/employee/add', [EmployeeController::class,'add']);
    Route::post('admin/employee/add', [EmployeeController::class,'insert']);
    Route::get('admin/employee/view/{id}', [EmployeeController::class,'view']);
    Route::get('admin/employee/edit/{id}', [EmployeeController::class,'edit']);
    Route::post('admin/employee/edit/{id}', [EmployeeController::class,'update']);
    Route::get('admin/employee/delete/{id}', [EmployeeController::class,'delete']);

    // jobs route
    Route::get('admin/jobs', [JobController::class,'index']);
    Route::get('admin/jobs/add', [JobController::class,'add']);
    Route::post('admin/jobs/add', [JobController::class,'insert']);
    Route::get('admin/jobs/view/{id}', [JobController::class,'view']);
    Route::get('admin/jobs/edit/{id}', [JobController::class,'edit']);
    Route::post('admin/jobs/update/{id}', [JobController::class,'update']);
    Route::get('admin/jobs/delete/{id}', [JobController::class,'delete']);

    Route::get('admin/jobs_export', [JobController::class,'jobsExport']);

    // jobs history
    Route::get('admin/job_history', [JobHistoryController::class,'index']);
    Route::get('admin/job_history/add', [JobHistoryController::class,'add']);
    Route::post('admin/job_history/add', [JobHistoryController::class,'add_insert']);
    Route::get('admin/job_history/edit/{id}', [JobHistoryController::class,'edit']);
    Route::post('admin/job_history/edit/{id}', [JobHistoryController::class,'update']);
    Route::get('admin/job_history/delete/{id}', [JobHistoryController::class,'delete']);

    Route::get('admin/job_history_export', [JobHistoryController::class,'job_history_export']);

    // job grades route

    Route::get('admin/job_grades',[JobGradesController::class,'index']);
    Route::get('admin/job_grades/add',[JobGradesController::class,'add']);
    Route::post('admin/job_grades/add',[JobGradesController::class,'add_insert']);

});

Route::get('logout',[AuthController::class,'logout']);
