<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*Route::get('/', function () {
    return redirect()->route('login');
});*/
Route::get('login', [AuthController::class,'loginForm'])->name("loginForm");
Route::post('login', [AuthController::class,'login'])->name("login");
Route::get('home',[HomeController::class,'index'])->name('home');