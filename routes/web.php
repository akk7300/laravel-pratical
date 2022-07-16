<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\UserFormController;
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


Route::get('/',[UserFormController::class,'index']);
Route::get('/forms/{form:uuid}',[UserFormController::class,'show']);
Route::post('/forms',[UserFormController::class,'store']);



