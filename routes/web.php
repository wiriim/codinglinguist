<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::view('/home', 'home');

Route::view('/user-dashboard', 'user-dashboard')->name('user-dashboard');