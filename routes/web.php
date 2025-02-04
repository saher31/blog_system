<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
Route::resource('posts', PostController::class);


Route::get('/', function () {
    // إذا كان المستخدم مسجلًا، يتم توجيهه إلى صفحة الدخول
    if (auth()->check()) {
        return redirect()->route('login');
    }
    // إذا لم يكن مسجلًا، يتم توجيهه إلى صفحة التسجيل
    return redirect()->route('register');
});

// صفحة التسجيل
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');

// صفحة الدخول
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

// إضافة أي Routes أخرى تخص الـ authenticated users
Route::get('/home', function () {
    return view('home');
})->middleware('auth');



Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);














Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
