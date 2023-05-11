<?php

namespace App\Http\Controllers\Web;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function create_chat(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id; 
 
        $chat = Chat::create([
            'profile_id' => $profile_id
        ]);

        return back();
    }

    public function list_chats(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;           

        $chats = Chat::where([
            ['profile_id', '=', $profile_id]
        ])->get();

        return view('app.chats', compact('chats'));
    }

}
