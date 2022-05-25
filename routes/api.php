<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;



Route::get("/products", [ProductController::class, "get"]);
Route::post("/products", [ProductController::class, "post"]);
Route::put("/products/{id}", [ProductController::class, "put"]);
Route::delete("/products/{id}", [ProductController::class, "delete"]);


Route::get("/cartItems", [CartItemController::class, "get"]);
Route::post("/cartItems", [CartItemController::class, "post"]);
Route::put("/cartItems/{id}", [CartItemController::class, "put"]);
Route::delete("/cartItems/{id}", [CartItemController::class, "delete"]);