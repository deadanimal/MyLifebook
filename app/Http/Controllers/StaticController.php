<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home(Request $request) {
        return view('static.home');
    }

    public function about(Request $request) {
        return view('static.about');
    }   
    
    public function terms(Request $request) {
        return view('static.terms');
    }  
    
    public function privacy(Request $request) {
        return view('static.privacy');
    }            

    // public function stripe_billing(Request $request) {
    //     return view('static.home');
    // }    
}
