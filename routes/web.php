<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);

Route::resource('feedback', FeedbackController::class);

Route::resource('/admin/feedback', FeedbackController::class);

Route::get('/admin', function() {
    return view('admin');
});

Route::resource('/admin/products', ProductsController::class);

