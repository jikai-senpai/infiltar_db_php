<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\armaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/armas', [armaController::class, 'index']);

Route::get('/armas/{id}', [armaController::class, 'show']);

Route::post('/armas', [armaController::class, 'store']);

Route::put('/armas/{id}', function () {
    return 'Actualizando arma';
});

Route::delete('/armas/{id}', [armaController::class, 'destroy']);

