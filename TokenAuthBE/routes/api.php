<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/orders', 'App\Http\Controllers\OrdersController@index');
Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::post('/logout', 'App\Http\Controllers\UserController@logout')->middleware('auth:sanctum');
Route::get('/users', 'App\Http\Controllers\UserController@index')->middleware('auth:sanctum');
