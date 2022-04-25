<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/estra', [IndexController::class, 'getIndex']);
