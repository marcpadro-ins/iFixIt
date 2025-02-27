<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportIfixitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import-ifixit', ImportIfixitController::class);