<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Question;
use App\Models\Record;
use App\Models\Rewind;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function create_record(Request $request) {
        $record = Record::create([

        ]);

        return back();
    }

    public function list_records(Request $request) {
        
        $site_con = new SiteController;
        $lol = $site_con->check_subscription($request->user());
        //dd($lol);

        $user_id = $request->user()->id;
        $profile_id = Profile::where([
            ['user_id', '=', $user_id]
        ])->first()->id;
        $records = Record::where([
            ['profile_id', '=', $profile_id]
        ])->get();
        return view('app.records', compact('records'));
    }

    public function detail_record(Request $request) {
        $id = (int)$request->route('record_id');
        $user_id = $request->user()->id;
        $profile_id = Profile::where([
            ['user_id', '=', $user_id]
        ])->first()->id;
        $record = Record::where([
            ['profile_id', '=', $profile_id],
            ['id', '=', $id],
        ])->get();  
        return view('app.record', compact('record'));      
    }

    public function list_questions(Request $request) {
        $user_id = $request->user()->id;
        $profile_id = Profile::where([
            ['user_id', '=', $user_id]
        ])->first()->id;
        $questions = Question::where([
            ['profile_id', '=', $profile_id]
        ])->get();
        return view('app.questions', compact('questions'));
    }    

    public function create_question(Request $request) {
        $user_id = $request->user()->id;
        $profile_id = Profile::where([
            ['user_id', '=', $user_id]
        ])->first()->id;
        
        $question = Question::create([
            'statement' => $request->search,
            'profile_id' => $profile_id
        ]);

        return view('app.question_result', compact('question'));
    }

    public function list_rewinds(Request $request) {
        $user_id = $request->user()->id;
        $profile_id = Profile::where([
            ['user_id', '=', $user_id]
        ])->first()->id;
        $rewinds = Rewind::where([
            ['profile_id', '=', $profile_id]
        ])->get();
        return view('app.rewinds', compact('rewinds'));
    }        

    public function create_rewind(Request $request) {
        $user_id = $request->user()->id;
        $profile_id = Profile::where([
            ['user_id', '=', $user_id]
        ])->first()->id;
        
        $rewind = Rewind::create([

        ]);
        return view('app.rewinds', compact('rewind'));        
    }
}
