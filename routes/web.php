<?php

use App\Http\Controllers\Indexcontoller;
use App\Http\Controllers\Jameltestcontroler;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post',[Indexcontoller::class,'index']);
Route::get('/test',[Jameltestcontroler::class,'testjamel']);

