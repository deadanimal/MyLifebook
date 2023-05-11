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

        $sophy_response = '';

        return view('app.sophy_response', 
            compact('chat', 'sophy_response'));
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
