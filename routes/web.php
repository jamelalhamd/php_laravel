<?php

use App\Http\Controllers\Indexcontoller;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post',[Indexcontoller::class,'index']);
Route::get('/post/{post}',[Indexcontoller::class,'show']);


