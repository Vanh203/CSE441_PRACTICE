<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/loai-mon', [LoaiMonController::class, 'index']);
Route::get('/mon-by-loai-mon', [MonController::class, 'getMonByLoaiMon']);