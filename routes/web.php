<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Views;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

Route::get('/home', [HomeController::class, 'home']);
  
Route::prefix('category')->group(function(){
    Route::get('/erha-age-corrector-anti-aging-program', [ProductController::class, 'AntiAging']);
    Route::get('/erha-truwhite-brightening-program', [ProductController::class, 'Brightening']);
    Route::get('/erha-acneact-acne-cure-program', [ProductController::class, 'AcneCure']);
    Route::get('/erhair-hair-growth-and-scalp-program', [ProductController::class, 'GrowthScalp']);
    Route::get('/erha-allderma-general-dermatology', [ProductController::class, 'AllDerma']);
});

Route::get('/news', [NewsController::class, 'news']);
Route::get('/news{string}', [NewsController::class, 'newsString']);

Route::prefix('program')->group(function(){
    Route::get('/daily-skin-program', [ProgramController::class, 'dailySkin']);
    Route::get('/skin-health-program', [ProgramController::class, 'skinHealth']);
});

Route::get('/story', [AboutUsController::class, 'aboutus']);

Route::get('/contact', [ContactUsController::class, 'contactus']);