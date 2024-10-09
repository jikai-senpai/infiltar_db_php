<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/armas', function () {
    return 'Obteniendo lista de armas';
});

Route::get('/armas/{id}', function () {
    return 'Obteniendo un arma';
});

Route::post('/armas', function () {
    return 'Creando arma';
});

Route::put('/armas/{id}', function () {
    return 'Actualizando arma';
});

Route::delete('/armas/{id}', function () {
    return 'Eliminando arma';
});
