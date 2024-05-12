<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintenanceController;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('login', [AuthController::class,'loginForm'])->name("loginForm");
Route::get('logout', [AuthController::class,'logout'])->name("logout");
Route::post('login', [AuthController::class,'login'])->name("login");
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('maintenance',[MaintenanceController::class,'index'])->name('maintenance');
Route::get('maintenance/get',[MaintenanceController::class,'showForm'])->name('maintenance/get');
Route::get('maintenance/show{id}',[MaintenanceController::class,'show'])->name('maintenance/show');
Route::get('maintenance/add',[MaintenanceController::class,'createForm'])->name('maintenance/add');