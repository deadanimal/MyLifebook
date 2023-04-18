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
        $user = $request->user();
        $user->createOrGetStripeCustomer();
        return $request->user()->redirectToBillingPortal(route('dashboard'));        
    }

    public function buy_product(Request $request) {
        $product_name = $request->product_name;
        if($product_name == '1kc') {
            $price_id = 'price_1MxrHXL56wwkJgEVj5dhmqa4';
        } else if ($product_name == '10kc') {
            $price_id = 'price_1MxrIEL56wwkJgEVvzBFQI7u';
        }
        return $request->user()->checkout($price_id);
    }

    public function dashboard(Request $request) {
        return view('app.dashboard');
    }

    public function check_subscription($user) {

        $subscription_type = '';

        if ($user->subscribed('prod_N3Kx5RISCPvNCg')) {
            $subscription_type = 'monthly_basic';
            
        } else if ($user->subscribed('prod_N3Kx5RISCPvNCg')) {

        } else {

        }

        return $subscription_type;
    }

}
