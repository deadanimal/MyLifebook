<?php

namespace App\Http\Controllers\Web;

use App\Models\Profile;
use App\Models\Question;
use App\Models\Prompt;
use App\Models\Rewind;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PromptController extends Controller {

    public function create_prompt(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;    

        // queue upload to R2
        // queue to transform image, video, audio
 
        $prompt = Prompt::create([
            'title' => $request->title,
            'raw_url' => $request->file('file')->store('mymemoir/prompts'),
            'profile_id' => $profile_id,
            'uuid' => (string) Str::orderedUuid(),         
        ]);

        return back();
    }

    public function list_prompts(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;            

        $prompts = Prompt::all();

        return view('app.prompts', compact('prompts'));
    }

    public function detail_prompt(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;        
        
        $id = (int)$request->route('prompt_id');
        
        $prompt = Prompt::where([
            ['id', '=', $id],
        ])->get();  

        return view('app.prompt', compact('prompt'));      
    }

    public function update_prompt(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type; 

        $id = (int)$request->route('prompt_id');
        
        $prompt = Prompt::where([
            ['profile_id', '=', $profile_id],
            ['id', '=', $id],
        ])->get();

        $prompt->update([

        ]);

        return back();
    }   

    public function translate_text(Request $request) {}

    public function transcribe_video(Request $request) {}

    public function translate_video(Request $request) {}       
    
    public function transcribe_audio(Request $request) {}

    public function translate_audio(Request $request) {}    

}
