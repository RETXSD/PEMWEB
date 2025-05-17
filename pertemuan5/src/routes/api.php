<?php

use App\Http\Controllers\Api\ProductApiController;
use Illuminate\Support\Facades\Route;

Route::middleware('clientAuth')->group(function () {
    Route::get('/products', [App\Http\Controllers\Api\ProductApiController::class, 'index']);
});