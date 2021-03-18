<?php

use App\Http\Controllers\{
    PostController
};

use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::Class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::Class, 'create'])->name('posts.create');
Route::post('posts/store', [PostController::Class, 'store'])->name('posts.store');
Route::get('posts/{id}', [PostController::Class, 'show'])->name('posts.show');
Route::get('posts/edit/{id}', [PostController::Class, 'edit'])->name('posts.edit');
Route::put('posts/update/{id}', [PostController::Class, 'update'])->name('posts.update');
Route::delete('posts/destroy/{id}', [PostController::Class, 'destroy'])->name('posts.destroy');


Route::get('/', function () {
    return view('welcome');
});
