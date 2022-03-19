<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ionic;
use App\Http\Controllers\IonicController;

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
Route::get('/welcome', [IonicController::class,'welcome']);
Route::get('/', [IonicController::class,'urwelcome']);
Route::get('/urwelcome', [IonicController::class,'urwelcome']);
Route::get('/aboutme', [IonicController::class,'aboutMe']);
Route::get('/comingsoon', [IonicController::class,'comingsoon']);
Route::get('/comment', [IonicController::class,'comment']);
