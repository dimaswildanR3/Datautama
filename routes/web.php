<?php

use Illuminate\Support\Facades\Route;
use app\Controllers\productcontroller;
use app\Controllers\transactioncontroller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('product',[productcontroller::class, 'index']);
Route::get('product',[productcontroller::class, 'getAll']);
Route::get('product',[productcontroller::class, 'getById']);
Route::get('product',[productcontroller::class, 'update']);

Route::get('transaction',[transactioncontroller::class, 'index']);
Route::get('transaction',[transactioncontroller::class, 'getAll']);
Route::get('transaction',[transactioncontroller::class, 'getById']);
Route::get('transaction',[transactioncontroller::class, 'update']);
