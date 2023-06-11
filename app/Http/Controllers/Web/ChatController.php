<?php

namespace App\Http\Controllers\Web;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Http;
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

        $response = Http::post('https://mychatbot.fly.dev', [
            'key' => env('MYCHATBOT_KEY'),
            'profile' => $profile_id,
            'message' => $chat->message
        ]);        

        $chat->response = $response['from_bot'];
        $chat->save();

        return redirect('/chats');
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
