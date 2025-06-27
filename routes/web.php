<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::view('/home', 'home')->name('home');

Route::view('/user-dashboard', 'user-dashboard')->name('user-dashboard');

// Auth
Route::get('/sign-in', [AuthController::class, 'getSignInPage'])->name('sign-in');
Route::post('/sign-in', [AuthController::class, 'signIn'])->name('sign-up');

Route::get('/sign-up', [AuthController::class, 'getSignUpPage'])->name('sign-up');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up');

Route::get('/logout', function(Request $request) {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
});

// Posts
Route::get('/create-post', [ForumController::class, 'getCreatePostPage'])->name('create-post');
Route::post('/create-post', [ForumController::class, 'createPost'])->name('create-post');