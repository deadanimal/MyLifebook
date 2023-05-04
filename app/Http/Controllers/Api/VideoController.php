<?php

namespace App\Http\Controllers\Api;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function list_videos(Request $request) {
        $profile_id = $request->user()->profile->id;
        $videos = Video::where('profile_id', $profile_id)->orderByDesc('created_at')->get();

        return [
            'videos' => $videos,
            'message' => ''
        ];        
    }

    public function detail_video(Request $request) {
        $profile_id = $request->user()->profile->id;
        $uuid = $request->route('video_id');
        $video = Video::where([
            ['uuid', '=', $uuid],
            ['profile_id', '=', $profile_id],
        ])->first();

        return [
            'video' => $video,
            'message' => ''
        ];          
    }

    public function create_video(Request $request) {

        $profile_id = $request->user()->profile->id;

        $video = Video::create([                        
            'raw_url' => $request->file('attachment')->store('mymemoir/videos'),
            'video_type' => $request->video_type,

            'profile_id' => $profile_id,
            'uuid' => (string) Str::orderedUuid(), 
        ]);

        return [
            'video' => $video,
            'response' => 'lol'
        ];

    }
}
