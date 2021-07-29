<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\DairaController;
use App\Http\Controllers\WilayaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('wialyas/all', [WilayaController::class, 'index'] );
Route::get('dairas/perWilaya/{id}', [DairaController::class, 'dairasPerWilaya'] );
Route::get('communes/perDaira/{id}', [CommuneController::class, 'communesPerDaira'] );
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
