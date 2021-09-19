<?php

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

//API Routes
Route::group(['prefix'=>'api'], function(){

    Route::post('/get/employee',[\App\Http\Controllers\EmployeeController::class, 'getEmployee']);
    Route::post('/add/employee',[\App\Http\Controllers\EmployeeController::class, 'addEmployee']);
    Route::post('/get/single/employee',[\App\Http\Controllers\EmployeeController::class, 'getSingleEmployee']);
    Route::post('/update/employee',[\App\Http\Controllers\EmployeeController::class, 'updateEmployee']);
    Route::post('/delete/employee',[\App\Http\Controllers\EmployeeController::class, 'deleteEmployee']);

});
