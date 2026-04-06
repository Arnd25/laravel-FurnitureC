<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::get('/feedback', [FeedbackController::class, 'index']);
