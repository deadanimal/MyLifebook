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
        $id = (int)$request->route('blogpost_id');
        $blogpost = Blogpost::find($id);
        return view('static.blogpost', compact('blogpost'));
    }
}
