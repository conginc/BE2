<?php

// use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\ProduceController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/login', [WelcomeController::class, 'login']);
Route::post('process', [WelcomeController::class, 'process_login']);
Route::resource('/product', ProduceController::class);