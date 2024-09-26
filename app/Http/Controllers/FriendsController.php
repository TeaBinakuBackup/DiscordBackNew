<?php

namespace App\Http\Controllers;

use App\Models\FriendsModel;

class FriendsController extends Controller
{
    public function getAllFriends()
    {
        $friends = FriendsModel::with('user1','user2')->get();
        foreach ($friends as $friend) {
            dump($friend);
        }
        return response()->json($friends);
    }
}
