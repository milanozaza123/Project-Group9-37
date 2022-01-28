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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/Background',[\App\Http\Controllers\Api\BackgroundApiController::class,'index']);
Route::get('/Content',[\App\Http\Controllers\Api\ContentApiController::class,'index']);
Route::get('/Category',[\App\Http\Controllers\Api\CategoryApiController::class,'index']);
Route::get('/Product',[\App\Http\Controllers\Api\ProductApiController::class,'index']);
Route::get('/User',[\App\Http\Controllers\Api\UsesrApiController::class,'index']);