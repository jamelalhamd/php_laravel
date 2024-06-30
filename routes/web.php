<?php

use App\Http\Controllers\Indexcontoller;


use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post',[Indexcontoller::class,'index'])->name('post.index');
Route::post('post',[Indexcontoller::class,'store'])->name('post.store');
Route::get('post/create',[Indexcontoller::class,'create'])->name('post.create');
Route::get('post/edit',[Indexcontoller::class,'edit'])->name('post.edit');
Route::get('post/{post}',[Indexcontoller::class,'show'])->name('post.show');




