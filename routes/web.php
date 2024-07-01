<?php

use App\Http\Controllers\Indexcontoller;


use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts',[Indexcontoller::class,'index'])->name('post.index');
Route::post('/posts',[Indexcontoller::class,'store'])->name('post.store');
Route::get('/posts/create',[Indexcontoller::class,'create'])->name('post.create');

Route::get('/posts/{post}/edit',[Indexcontoller::class, 'edit'])->name('post.edit');
Route::get('/posts/{post}',[Indexcontoller::class,'show'])->name('post.show');
Route::put('/posts/{post}',[Indexcontoller::class,'update'])->name('post.update');



