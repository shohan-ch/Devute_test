<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;






/*
Auth Route
*/

//Get the authenticated User through Jwt 

Route::post("/me", [AuthController::class, 'me'])->middleware("auth:api");
Route::post("/refresh", [AuthController::class, 'refresh']);
Route::post("/reset-password", [AuthController::class, 'resetPassword']);
Route::post("/check-token", [AuthController::class, 'checkToken']);
Route::post("/forget-password", [AuthController::class, "forgetPasswordRequest"]);
Route::post("/reverify", [AuthController::class, "reverifyRequest"]);
Route::post("/verify", [AuthController::class, "verify"]);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'register']);















Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});