<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class ProfileController extends Controller
{

    public function view_self_profile(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_type = $profile->type;
        $profile_id = $profile->id;

        return view('profile.self');
    }
    
    public function update_self_profile(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_type = $profile->type;
        $profile_id = $profile->id;

        $profile->update([

        ]);

        return back();
    }

    public function billing(Request $request) {
        $user = $request->user();
        $user->createOrGetStripeCustomer();
        return $request->user()->redirectToBillingPortal(route('dashboard'));        
    }  
    
    public function billing_from_mobile(Request $request) {
        $tokenQuery = $request->query('token');
        $token = PersonalAccessToken::findToken($tokenQuery);
        $user = $token->tokenable;
        $user->createOrGetStripeCustomer();
        return $user->redirectToBillingPortal(route('dashboard'));        
    }        

    public function create_profile(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;    

        return back();
    }

    public function list_profiles(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;            

        return view('profile.list', compact('profiles'));
    }

    public function detail_profile(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type;        
        
        $id = (int)$request->route('profile_id');
        $profile = Profile::find($id);

        return view('profile.detail', compact('profile'));      
    }

    public function update_profile(Request $request) {

        $user = $request->user();
        $profile_id = $user->profile->id;
        $profile_type = $user->profile->type; 

        $id = (int)$request->route('record_id');   
        $profile = Profile::find($id); 

        $profile->update([

        ]);

        return back();
    }   
    
    public function view_dashboard(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_type = $profile->type;
        $profile_id = $profile->id;

        if ($profile_type == 'admin') {
            return view('profile.admin-dashboard');
        } else if ($profile_type == 'enduser') {
            return view('profile.enduser-dashboard');
        } else {

        }
        
    }      

}
