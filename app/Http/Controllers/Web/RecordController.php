<?php

namespace App\Http\Controllers\Web;

use App\Models\Profile;
use App\Models\Question;
use App\Models\Record;
use App\Models\Rewind;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecordController extends Controller {

    public function create_record(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;    

        $record = Record::create([
            'title' => $request->title,
            'raw_url' => $request->file('file')->store('mymemoir/records'),
            'status' => 'created',
            'profile_id' => $profile_id,
            'uuid' => (string) Str::orderedUuid(),         
        ]);

        return back();
    }

    public function list_records(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;            

        $records = Record::where([
            ['profile_id', '=', $profile_id]
        ])->get();

        return view('app.records', compact('records'));
    }

    public function detail_record(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;        
        
        $id = (string)$request->route('record_id');
        
        $record = Record::where([
            ['profile_id', '=', $profile_id],
            ['uuid', '=', $id],
        ])->get();  

        return view('app.record', compact('record'));      
    }

    public function update_record(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type; 

        $id = (int)$request->route('record_id');
        
        $record = Record::where([
            ['profile_id', '=', $profile_id],
            ['id', '=', $id],
        ])->get();

        $record->update([

        ]);

        return back();
    }   

    public function translate_text(Request $request) {}

    public function transcribe_video(Request $request) {}

    public function translate_video(Request $request) {}       
    
    public function transcribe_audio(Request $request) {}

    public function translate_audio(Request $request) {}    

}
