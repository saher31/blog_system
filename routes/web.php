<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);

Route::get('/', function () {
  return redirect()->route('posts.index'); // بيحولك مباشرة لصفحة المقالات
});
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');








