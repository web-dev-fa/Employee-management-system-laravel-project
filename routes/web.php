<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('employees', EmployeesController::class);

    Route::get('/employees/{id}/vacation', 'App\Http\Controllers\EmployeesController@vacationRequest')->name('vacation.request');
    Route::get('/employees/{id}/certificate', 'App\Http\Controllers\EmployeesController@certificateRequest')->name('certificate.request');
   
});

