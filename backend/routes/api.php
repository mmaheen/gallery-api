<?php

use App\Http\Controllers\Api\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test',[SiteController::class, 'test'])
    ->name('api.test');