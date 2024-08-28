<?php

use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user/signout', [UserController::class, 'signout']);

    Route::post('category', [CategoryController::class, 'store']);
    Route::put('category/update', [CategoryController::class, 'update']);
    Route::delete('category/{id}', [CategoryController::class, 'destroy']);
});

Route::post('user/signin', [UserController::class, 'signin']);
Route::post('user/signup', [UserController::class, 'signup']);

Route::get('category', [CategoryController::class, 'index']);
