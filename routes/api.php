<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\StoreController;
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

// роуты нужно вызывать с префиксом /api/url_роута

Route::get('/test', [Controller::class, 'testApi']);

Route::post('/user/registration', [StoreController::class, 'userRegistration']);
