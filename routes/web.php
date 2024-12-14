<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}/{age}',[SiteController::class,'index']);

Route::get('/form-submit/{email}', [SiteController::class, 'index']);

Route::get('/user-agent',[SiteController::class,'userAgent']);
