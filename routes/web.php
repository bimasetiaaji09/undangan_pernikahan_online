<?php

use App\Http\Controllers\DataPernikahanController;
use App\Http\Controllers\LoginController;
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

    Route::get(
        '/',
        [LoginController::class,"index"])
        ->name('index');

    Route::prefix('/admin')->group(function () {
        Route::get(
            '/DataPernikahan', 
            [DataPernikahanController::class,"DataPernikahan"])
            ->name('DataPernikahan');
        Route::get(
            '/ViewTambahDataPernikahan', 
            [DataPernikahanController::class,"ViewTambahDataPernikahan"])
            ->name('ViewTambahDataPernikahan');
    });

    Route::prefix('/Login')->group(function () {
        Route::post(
            '/Login', 
            [LoginController::class,"Login"])
            ->name('Login');
    });
