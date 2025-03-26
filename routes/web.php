<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportIfixitController;
use App\Http\Controllers\GuideController;

Route::get('/', [GuideController::class, 'index']);
Route::get('/tutorials', [GuideController::class, 'index'])->name('tutorials.index');
Route::get('/tutorials/{tutorial}', [GuideController::class, 'show'])->name('tutorials.show');

Route::get('/import-ifixit', ImportIfixitController::class);