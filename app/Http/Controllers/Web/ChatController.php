<?php

namespace App\Http\Controllers\Web;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    public function create_chat(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id; 
 
        $chat = Chat::create([
            'message' => $request->message,
            'uuid' => (string) Str::orderedUuid(), 
            'profile_id' => $profile_id
        ]);

        $chats = Chat::where([
            'profile_id' => $profile_id
        ])->orderBy('created_at','desc')->take(5)->get();;

        return view('app.chats', 
            compact('chat', 'chats'));
    }

    public function list_chats(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;           

        $chats = Chat::where([
            ['profile_id', '=', $profile_id]
        ])->orderBy('created_at','desc')->take(5)->get();;

        return view('app.chats', compact('chats'));
    }

}
