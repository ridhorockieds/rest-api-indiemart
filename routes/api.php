<?php

use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\PriceController;
use App\Http\Controllers\api\v1\ProductController;
use App\Http\Controllers\api\v1\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user/signout', [UserController::class, 'signout']);

    Route::post('category', [CategoryController::class, 'store']);
    Route::put('category/update', [CategoryController::class, 'update']);
    Route::delete('category/{id}', [CategoryController::class, 'destroy']);

    Route::post('product/store', [ProductController::class, 'store']);
    Route::put('product/update/{id}', [ProductController::class, 'update']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);

    Route::get('price', [PriceController::class, 'index']);
    Route::get('price/{id}', [PriceController::class, 'show']);
    Route::post('price/store', [PriceController::class, 'store']);
});

Route::get('product', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);


Route::post('user/signin', [UserController::class, 'signin']);
Route::post('user/signup', [UserController::class, 'signup']);

Route::get('category', [CategoryController::class, 'index']);
