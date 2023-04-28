<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create_question(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id; 
 
        $question = Question::create([
            'profile_id' => $profile_id
        ]);

        return back();
    }

    public function list_questions(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;           

        $questions = Question::where([
            ['profile_id', '=', $profile_id]
        ])->get();

        return view('question.list', compact('questions'));
    }

    public function detail_question(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;  
        
        $id = (int)$request->route('question_id');
        
        $question = Question::where([
            ['profile_id', '=', $profile_id],
            ['id', '=', $id],
        ])->get();  

        return view('question.detail', compact('question'));      
    }

    public function update_question(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;

        $id = (int)$request->route('question_id');
        
        $question = Question::where([
            ['profile_id', '=', $profile_id],
            ['id', '=', $id],
        ])->get();

        $question->update([

        ]);

        return back();
    }  
}
