<?php

namespace App\Http\Controllers\Api;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecordController extends Controller
{
    public function list_records(Request $request) {
        $profile_id = $request->user()->profile->id;
        $records = Record::where('profile_id', $profile_id)->orderByDesc('created_at')->get();

        return [
            'records' => $records,
            'message' => ''
        ];        
    }

    public function detail_record(Request $request) {
        $profile_id = $request->user()->profile->id;
        $uuid = $request->route('record_id');
        $record = Record::where([
            ['uuid', '=', $uuid],
            ['profile_id', '=', $profile_id],
        ])->first();

        return [
            'record' => $record,
            'message' => ''
        ];          
    }

    public function create_record(Request $request) {

        $profile_id = $request->user()->profile->id;

        $record = Record::create([                        
            'raw_url' => $request->file('attachment')->store('mymemoir/records'),
            'record_type' => $request->record_type,

            'profile_id' => $profile_id,
            'uuid' => (string) Str::orderedUuid(), 
        ]);

        return [
            'record' => $record,
            'response' => 'lol'
        ];

    }
}
