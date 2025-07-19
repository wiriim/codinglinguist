<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
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
Route::get('/posts', [ForumController::class,'getAllPostPage'])->name('posts');

Route::get('/create-post', [ForumController::class, 'getCreatePostPage'])->name('post-create');
Route::post('/create-post', [ForumController::class, 'createPost'])->name('post-create');

Route::get('/edit-posts/{post}', [ForumController::class,'getEditPostPage'])->name('post-edit');
Route::post('/edit-posts/{post}', [ForumController::class,'editPost'])->name('post-edit');

Route::get('/delete-posts/{post}', [ForumController::class,'deletePost'])->name('post-delete');

Route::get('/posts/{post}', [ForumController::class,'getPostPage'])->name('post-detail');

// Posts Likes
Route::get('/posts/like/{post}', [ForumController::class,'likePost'])->name('post-like');
Route::get('/posts/dislike/{post}', [ForumController::class,'dislikePost'])->name('post-dislike');

// Posts Comments
Route::post('/posts/comment/{post}', [CommentController::class,'createComment'])->name('comment');


// Course
Route::get('/course/{course}', [CourseController::class, 'getCoursePage'])->name('course');

// Level
Route::get('/level/{level}', [CourseController::class, 'getLevelPage'])->name('level');