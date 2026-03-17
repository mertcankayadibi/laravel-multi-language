<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('/tr');
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'tr|en|ru|ar']
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
});

