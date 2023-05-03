<?php

namespace App\Http\Controllers\Api;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function view_profile(Request $request) {
        $user = $request->user();
        $profile = $user->profile;

        return [
            'data' => [
                'user' => $user,
                'profile' => $profile,
            ],
            'message' => ''
        ];
    }

    public function update_email(Request $request) {}

    public function update_username(Request $request) {}
    
    public function update_profile(Request $request) {
        $user = $request->user();
        $profile = $user->profile;

        $profile->update([

        ]);

        return [
            'data' => [
                'user' => $user,
                'profile' => $profile,
            ],
            'message' => ''
        ];
    }

    public function billing(Request $request) {

        $user = $request->user();
        $user->createOrGetStripeCustomer();
        return $request->user()
                        ->redirectToBillingPortal(route('mobile-from-billing'));        
    } 
}