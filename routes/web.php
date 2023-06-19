<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\FrontEndController::class, 'about_us']);
Route::get('/make-an-application', [App\Http\Controllers\FrontEndController::class, 'make_an_application']);
Route::get('/gallery', [App\Http\Controllers\FrontEndController::class, 'gallery']);
