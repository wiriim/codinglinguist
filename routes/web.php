<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::view('/home', 'home')->name('home');

Route::view('/user-dashboard', 'user-dashboard')->name('user-dashboard');

Route::view('/sign-up', 'sign-up')->name('sign-up');

Route::view('/sign-in', 'sign-in')->name('sign-in');