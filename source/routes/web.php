<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AuthController, CoaController};

Route::get('generate-csrf-token', function () { $token = csrf_token(); return response()->json(['csrf_token' => $token]); });
Route::get('login', [AuthController::class, "login"])->name('auth.login');
Route::get('/', function () {
    echo "LANDING PAGE ERAKAUNTING";
});
Route::middleware('auth_middleware')->group(function () {
    Route::get('dashboard', function () {
        echo "DASHBOARD ERAKAUNTING";
    });
    Route::prefix('accounting')->group(function () {
        Route::get('coa', [CoaController::class, "index"]);
    });
});