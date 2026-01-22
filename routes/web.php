<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Xóa hoặc comment dòng Route::get('/', function...) mặc định của Laravel đi
// Thay bằng cụm này:
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/contact', 'contact')->name('contact');
});