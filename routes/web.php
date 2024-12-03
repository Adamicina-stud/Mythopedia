<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::resource('/posts', PostController::class);
