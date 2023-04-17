<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function view_profile(Request $request) {
        $user_id = $request->user()->id;
        $profile = Profile::where([
            ['user_id', '=', $user_id]
        ])->first();
        return view('app.profile', compact('profile'));
    }

    public function update_profile(Request $request) {
        $user_id = $request->user()->id;
        $profile = Profile::where([
            ['user_id', '=', $user_id]
        ])->first();

        $profile->update([

        ]);
        
        return back();
    }  

    public function view_settings(Request $request) {
        $user_id = $request->user()->id;
        $profile = Profile::where([
            ['user_id', '=', $user_id]
        ])->first();
        return view('app.settings', compact('profile'));
    }

    public function update_settings(Request $request) {
        $user_id = $request->user()->id;
        $profile = Profile::where([
            ['user_id', '=', $user_id]
        ])->first();

        $profile->update([

        ]);
        
        return back();
    }   
    
    public function billing(Request $request) {
        return $request->user()->redirectToBillingPortal();        
    }

    public function dashboard(Request $request) {

        return view('app.dashboard');
    }

}
