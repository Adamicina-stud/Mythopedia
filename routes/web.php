<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::resource('/posts', PostController::class);

Route::get('/mythology/',function(){
    return view('mythology.index');
})->name('mythology');

Route::get('/mythology/list',function(){
    return view('mythology.list');
})->name('list');

Route::get('/mythology/greek/',function(){
    return view('mythology.greek.index');
})->name('greek');

Route::get('/mythology/norse/',function(){
    return view('mythology.norse.index');
})->name('norse');

Route::get('/mythology/slavic/',function(){
    return view('mythology.slavic.index');
})->name('slavic');

Route::get('/creepypasta/',function(){
    return view('creepypasta.index');
})->name('creepypasta');

Route::get('/about_me',function(){
    return view('about_me');
})->name('about_me');
