<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route for the landing page
Route::get('/', [HomeController::class, 'index']);
Route::get('/anniversary', function () {
    return view('anniversary');
});
