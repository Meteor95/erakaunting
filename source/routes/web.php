<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('login', [AuthController::class, "login"])->name('auth.login');
Route::get('/', function () {
    return view('welcome');
});