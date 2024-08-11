<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Task1Controller;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/task1', [Task1Controller::class,'taskAction']);

// Route::get('/task1/user/{id}',[Task1Controller::class,'userAction']);

// Route::get('/test',[TestController::class,'greetAction']);

// Route::get('/post');

Route::get('/posts',[PostsController::class,'index'])->name('posts.index');

Route::get('/posts/create',[PostsController::class,'create'])->name('posts.create');

Route::post('/posts',[PostsController::class,'store'])->name('posts.store');

Route::get('/posts/{post}/edit',[PostsController::class,'edit'])->name('posts.edit');

Route::put('/posts/{post}',[PostsController::class,'update'])->name('posts.update');

Route::delete('/posts/{post}',[PostsController::class,'destroy'])->name('posts.destroy');

Route::get('/posts/{post}',[PostsController::class,'show'])->name('posts.show');

