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

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(["admin", "auth"]);
    Route::get('/callback', [App\Http\Controllers\FattorahPaymentController::class, 'callback'])->middleware(["auth","payment"]);
    Route::get('/error', [App\Http\Controllers\FattorahPaymentController::class, 'error'])->middleware(["auth"]);
    Route::get('/pay', [App\Http\Controllers\FattorahPaymentController::class, 'payForSubscribe'])->name("pay")->middleware(["auth","payment"]);
    Route::get('/profile', [App\Http\Controllers\profile::class, 'index'])->middleware(["auth"]);
    Route::post('/profile', [App\Http\Controllers\profile::class, 'update'])->middleware(["auth"]);

});

