<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AlamatController;

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/Contact',[ContactController::class,'index']);
Route::get('/Product',[ProductController::class,'index']);
Route::get('/Alamat',[AlamatController::class,'index']);

// Route::get('/', function () {
//     return view('/home');
// });
