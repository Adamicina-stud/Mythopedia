<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'test');
Route::resource('/posts', PostController::class);
