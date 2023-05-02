<?php


namespace App\Http\Controllers\Api;

use App\Models\PersonAudiovisual;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AudioVisualController extends Controller
{
    public function list_audiovisuals(Request $request) {
        
        $avs = PersonAudiovisual::where('profile_id', $request->user()->profile->id)->get();
        return [
            'data' => $avs,
            'message' => ''
        ];
    }

    public function detail_audiovisual(Request $request) {
        $profile_type = $request->user()->profile->profile_type;

        $av = PersonAudiovisual::where([
            ['uuid','=', $request->uuid],
        ])->first();

        return [
            'data' => $av,
            'message' => ''
        ];
    }    

    public function create_audiovisual(Request $request) {
        $profile_id = $request->user()->profile->id;

        $av = PersonAudiovisual::create([
            'uuid' => (string) Str::orderedUuid(),
            'profile_id' => $profile_id,

            'raw_url' => $request->raw_url,
            'type' => $request->type,
            'title' => $request->title,
        ]);
        
        return [
            'data' => $av,
            'message' => ''
        ];
    }       

    public function update_audiovisual(Request $request) {
        $profile_type = $request->user()->profile->profile_type;

        $av = PersonAudiovisual::where([
            ['uuid','=', $request->uuid],
        ])->first();

        $av->update([

        ]);

        return [
            'data' => $av,
            'message' => ''
        ];
    }   
    
    public function remove_audiovisual(Request $request) {
        $profile_type = $request->user()->profile->profile_type;

        $av = PersonAudiovisual::where([
            ['uuid','=', $request->uuid],
        ])->first();

        $av->softDelete();

        return [
            'message' => ''
        ];
    }      

    public function update_audiovisual_annotations(Request $request) {
        $profile_type = $request->user()->profile->profile_type;

        $av = PersonAudiovisual::where([
            ['uuid','=', $request->uuid],
        ])->first();

        return [
            'data' => $av,
            'message' => ''
        ];
    }          
}
