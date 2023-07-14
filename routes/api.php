<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\JWTAuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route ::post('login', [JWTAuthController::class, 'login']);
Route ::post('register', [JWTAuthController::class, 'register']);
Route ::group(['middleware' => 'auth.jwt'], function () {
    Route ::get('logout', [JWTAuthController::class, 'logout']);
});

Route::resource('siswa', SiswaController::class);
