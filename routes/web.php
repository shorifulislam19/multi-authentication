<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin routes 
Route::get('/admin/login', [App\Http\Controllers\Backend\AdminController::class, 'adminLoginFrom'])->name('admin.login.from');
Route::post('/admin-login', [App\Http\Controllers\Backend\AdminController::class, 'adminLogin'])->name('admin-login');
Route::get('/admin/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'adminDashboard'])->name('admin.dashboard');

// guard 

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [App\Http\Controllers\Backend\AdminController::class, 'adminLogout'])->name('admin.logout');
});
