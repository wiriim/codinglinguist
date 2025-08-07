<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::view('/home', 'home')->name('home');

Route::view('/user-dashboard', 'user-dashboard')->name('user-dashboard');

// Profile
Route::get('/profile', [UserController::class, 'getProfilePage'])->name('profile');
Route::get('/edit-profile', [UserController::class, 'getEditProfilePage'])->name('edit-profile');
Route::post('/edit-profile', [UserController::class, 'editProfile'])->name('edit-profile');

// Auth
Route::get('/sign-in', [AuthController::class, 'getSignInPage'])->name('sign-in');
Route::post('/sign-in', [AuthController::class, 'signIn'])->name('sign-up');

Route::get('/sign-up', [AuthController::class, 'getSignUpPage'])->name('sign-up');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Posts
Route::get('/posts', [ForumController::class,'getAllPostPage'])->name('posts');
Route::get('/posts/filter/{programmingLanguage}/{postType}/{sortBy}', [ForumController::class,'filterPosts'])->name('posts-filter');
Route::get('/posts/filter/{programmingLanguage}/{postType}/{sortBy}/{search}', [ForumController::class,'filterPosts'])->name('posts-filter');

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
Route::get('/course/{course}/level/{level}', [CourseController::class, 'getLevelPage'])->name('level');
Route::get('/level/answer/{level}', [CourseController::class, 'getBossAnswerInput'])->name('level-answer');
Route::get('/level/saveProgress/{level}/{course}', [CourseController::class, 'saveProgress'])->name('save-progress');

// Question
Route::get('/course/{course}/level/{level}/question/{question}', [CourseController::class, 'getQuestionPage'])->name('question');
Route::post('/course/{course}/level/{level}/question/{question}', [CourseController::class, 'submitAnswer'])->name('question');