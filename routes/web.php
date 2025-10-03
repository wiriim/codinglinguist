<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

//Home stuff
Route::get('/home', [HomeController::class, 'getHomePage'])->name('home');
Route::get('/about-us', [HomeController::class, 'getAboutUsPage'])->name('about-us');
Route::get('/leaderboard', [HomeController::class, 'getLeaderboardPage'])->name('leaderboard');

// Admin
Route::get('/admin-ban', [AdminController::class, 'getAdminBanPage'])->name('admin-ban');
Route::get('/admin-unban', [AdminController::class, 'getAdminUnbanPage'])->name('admin-unban');

Route::get('/ban/{user}', [AdminController::class, 'ban'])->name('ban');
Route::get('/unban/{user}', [AdminController::class, 'unban'])->name('unban');

// Profile / User
Route::get('/profile/{user}', [UserController::class, 'getProfilePage'])->name('profile');
Route::get('/edit-profile', [UserController::class, 'getEditProfilePage'])->name('edit-profile');
Route::post('/edit-profile', [UserController::class, 'editProfile'])->name('edit-profile');
Route::get('/user-dashboard', [UserController::class, 'getUserDashboardPage'])->name('user-dashboard');

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
Route::get('/posts/{post}/comment/{filter}', [ForumController::class,'getPostPageCommentFilter'])->name('post-detail-comment-filter');

Route::get('/clearLog', [ForumController::class,'clearLogs'])->name('clear-logs');

// Posts Likes
Route::get('/posts/like/{post}', [ForumController::class,'likePost'])->name('post-like');
Route::get('/posts/dislike/{post}', [ForumController::class,'dislikePost'])->name('post-dislike');

// Posts Comments
Route::post('/posts/comment/{post}', [CommentController::class,'createComment'])->name('comment');
Route::get('/posts/comment/delete/{comment}', [CommentController::class,'deleteComment'])->name('comment-delete');
Route::post('/posts/comment/edit/{comment}', [CommentController::class,'editComment'])->name('comment-edit');

Route::get('/posts/comment/like/{comment}', [CommentController::class,'likeComment'])->name('comment-like');
Route::get('/posts/comment/dislike/{comment}', [CommentController::class,'dislikeComment'])->name('comment-dislike');

// Posts Replies
Route::post('/posts/reply/{comment}', [ReplyController::class,'createReply'])->name('reply-create');
Route::get('/posts/reply/delete/{reply}', [ReplyController::class,'deleteReply'])->name('reply-delete');
Route::post('/posts/reply/edit/{reply}', [ReplyController::class,'editReply'])->name('reply-edit');

Route::get('/posts/reply/like/{reply}', [ReplyController::class,'likeReply'])->name('reply-like');
Route::get('/posts/reply/dislike/{reply}', [ReplyController::class,'dislikeReply'])->name('reply-dislike');

// Course
Route::get('/course/{course}', [CourseController::class, 'getCoursePage'])->name('course');

// Level
Route::get('/course/{course}/level/{level}', [CourseController::class, 'getLevelPage'])->name('level');
Route::get('/level/answer/{level}', [CourseController::class, 'getBossAnswerInput'])->name('level-answer');
Route::get('/course/{course}/level/answer/incorrect/{level}', [CourseController::class, 'saveBossAnswerIncorrect'])->name('level-answer');
Route::get('/level/saveProgress/{level}/{course}', [CourseController::class, 'saveProgress'])->name('save-progress');

// Question
Route::get('/course/{course}/level/{level}/question/{question}', [CourseController::class, 'getQuestionPage'])->name('question');
Route::post('/course/{course}/level/{level}/question/{question}', [CourseController::class, 'submitAnswer'])->name('question');