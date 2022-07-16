<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;

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

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

Route::get('forms',[FormController::class,'index']);
Route::post('forms',[FormController::class,'store']);
Route::get('forms/{form:uuid}',[FormController::class,'show']);
Route::post('forms/add-fields',[FormController::class,'addFields']);

