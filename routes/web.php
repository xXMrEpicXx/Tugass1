<?php

use App\Http\Controllers\PromotionController;
Route::get('/', function () {
    return view('welcome'); // Ganti dengan PromotionController@index jika perlu
});

Route::resource('promotions', PromotionController::class);
Route::resource('promotions', PromotionController::class);
Route::get('/', [PromotionController::class, 'index'])->name('home');
