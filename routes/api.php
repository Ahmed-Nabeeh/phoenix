<?php
/*
// routes/api.php - External API for mobile apps

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\LessonController;
use App\Http\Controllers\Api\V1\BookingController;

Route::prefix('v1')->group(function () {
    
    // Public API endpoints
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/lessons', [LessonController::class, 'index']);
    Route::get('/lessons/{id}', [LessonController::class, 'show']);
    
    // Protected API endpoints
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', [AuthController::class, 'user']);
        Route::apiResource('bookings', BookingController::class);
        Route::get('/dashboard', [App\Http\Controllers\Api\V1\DashboardController::class, 'index']);
    });
});
*/