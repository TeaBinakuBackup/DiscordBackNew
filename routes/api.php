<?php

use App\Http\Controllers\FriendsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/all/friends',[FriendsController::class,'getAllFriends']);
