<?php

use App\Http\Controllers\FriendsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LogInController;

Route::get('/all/friends',[FriendsController::class,'getAllFriends']);



Route::post('/add/user', [SignUpController::class, 'index']);
Route::post('/login', [LoginController::class, 'index']);

