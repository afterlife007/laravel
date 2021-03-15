<?php

use App\Http\Controllers\{
    PostController
};

use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::Class, 'index'])->name('post.index');
Route::get('post/create', [PostController::Class, 'create'])->name('post.create');
Route::post('post/store', [PostController::Class, 'store'])->name('post.store');

Route::get('/', function () {
    return view('welcome');
});
