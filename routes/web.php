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

Route::get("lang/{lang}" , function ($lang){

    if (in_array($lang, ["ar" , "en"]))
    {
        if (auth()->user())
        {
            $user = auth()->user();
            $user->lang = $lang;
            $user->save();
        }else{
            if (session()->has("lang"))
            {
                session()->forget("lang");
            }
                session()->put("lang" , $lang);
        }
    }else{
        if (auth()->user())
        {
            $user = auth()->user();
            $user->lang = "ar";
            $user->save();
        }else{
            if (session()->has("lang"))
            {
                session()->forget("lang");
            }

        }
        session()->put("lang" , "ar");
    }
    return back();
});

Route::group(["middleware" => "lang"], function (){
    Route::get('/', function () {
        return view('welcome');
    })->middleware(["auth"]);

    Auth::routes();

    Route::prefix("/dashboard")->group(function(){
        Route::middleware(["auth", "admin"])->group(function (){
            Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
            Route::get('/users', [App\Http\Controllers\dashboard\userController::class, 'index'])->name('dashboard.users');
        });
    });
    Route::get('/callback', [App\Http\Controllers\FattorahPaymentController::class, 'callback'])->middleware(["auth","payment"]);
    Route::get('/error', [App\Http\Controllers\FattorahPaymentController::class, 'error'])->middleware(["auth"]);
    Route::get('/pay', [App\Http\Controllers\FattorahPaymentController::class, 'payForSubscribe'])->name("pay")->middleware(["auth","payment"]);
    Route::get('/profile', [App\Http\Controllers\profile::class, 'index'])->middleware(["auth"]);
    Route::post('/profile', [App\Http\Controllers\profile::class, 'update'])->middleware(["auth"]);
    Route::get('/settings', [App\Http\Controllers\settings::class, 'index'])->name("settings")->middleware(["auth"]);
    Route::post('/signout/all', [App\Http\Controllers\settings::class, 'signout'])->name("devices")->middleware(["auth"]);
    Route::get('/cancel/subscription', [App\Http\Controllers\settings::class, 'cancel'])->name("cancel")->middleware(["auth"]);
    Route::post('/update/bundle', [App\Http\Controllers\settings::class, 'update'])->name("update")->middleware(["auth"]);
    Route::post('/update/password', [App\Http\Controllers\settings::class, 'updatePass'])->middleware(["auth"]);
});

