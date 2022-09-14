<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Controllers\productcontroller;
use app\Controllers\transactioncontroller;

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
Route::post('product',[productcontroller::class, 'index']);
Route::get('product',[productcontroller::class, 'getAll']);
Route::get('product',[productcontroller::class, 'getById']);
Route::get('product',[productcontroller::class, 'update']);

Route::post('transaction',[transactioncontroller::class, 'index']);
Route::get('transaction',[transactioncontroller::class, 'getAll']);
Route::get('transaction',[transactioncontroller::class, 'getById']);
Route::get('transaction',[transactioncontroller::class, 'update']);