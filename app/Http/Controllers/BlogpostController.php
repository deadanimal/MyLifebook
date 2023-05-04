<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function list_blogposts(Request $request) {
        $blogposts = Blogpost::all();
        return view('static.blogposts', compact('blogposts'));
    }

    public function detail_blogpost(Request $request) {
        $slugname = $request->route('slugname');
        $blogpost = Blogpost::where('slugname', $slugname)->first();
        return view('static.blogpost', compact('blogpost'));
    }
}
