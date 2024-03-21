<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\MemberController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post'])->middleware('test');
Route::middleware('auth')->group(function () {
    Route::get('/', [MemberController::class, 'index']);
});
Route::get('/admin', [ContactController::class, 'admin']);
