<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

Route::get('/add', [MathController::class, 'add']);
http://127.0.0.1:8000/api/add?a=5&b=7