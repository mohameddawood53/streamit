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

Route::get('/', function () {
    return view('welcome');
})->middleware(["auth"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/callback', [App\Http\Controllers\FattorahPaymentController::class, 'callback'])->middleware(["auth","payment"]);
Route::get('/error', [App\Http\Controllers\FattorahPaymentController::class, 'error'])->middleware(["auth"]);
Route::get('/pay', [App\Http\Controllers\FattorahPaymentController::class, 'payForSubscribe'])->name("pay")->middleware(["auth","payment"]);
