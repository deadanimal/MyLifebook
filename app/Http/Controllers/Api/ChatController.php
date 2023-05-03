<?php

namespace App\Http\Controllers\Api;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    public function list_chats(Request $request) {
        $profile_id = $request->user()->profile->id;
        $chats = Chat::where('profile_id', $profile_id)->orderByDesc('created_at')->get();

        return [
            'chats' => $chats,
            'message' => ''
        ];        
    }

    public function detail_chat(Request $request) {
        $profile_id = $request->user()->profile->id;
        $uuid = $request->route('chat_id');
        $chat = Chat::where([
            ['uuid', '=', $uuid],
            ['profile_id', '=', $profile_id],
        ])->first();

        return [
            'chat' => $chat,
            'message' => ''
        ];          
    }

    public function create_chat(Request $request) {

        $profile_id = $request->user()->profile->id;

        $chat = Chat::create([                        
            'from_bot' => false,
            'profile_id' => $profile_id,
            'uuid' => (string) Str::orderedUuid(), 
        ]);

        if($request->chat_type == 0) {
            $chat->raw_message = $request->raw_message;
        } elseif ($request->chat_type == 1) {
            $chat->raw_audio_url = $request->file('audio')->store('mymemoir/chat-audio');
        }

        $chat->save();

        return [
            'chat' => $chat,
            'response' => 'lol'
        ];

    }
}
