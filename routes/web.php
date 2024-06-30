<?php

use App\Http\Controllers\Indexcontoller;


use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post',[Indexcontoller::class,'index'])->name('post.index');
Route::get('/post/{post}',[Indexcontoller::class,'show'])->name('post.show');



