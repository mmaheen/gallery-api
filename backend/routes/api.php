<?php

use App\Http\Controllers\Api\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/photos', [SiteController::class, 'photos'])->name('api.photos');