<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;
use App\Post;
use Auth;

class MainController extends Controller
{
    public function profile()
    {
        $profile = Profile::find(Auth::user()->id);
        return view('main.profile', ['profile' => $profile]);
    }

    public function edit()
    {
        return view('main.edit');
    }

    public function store_profile(Request $request)
    {
        $profile = new Profile;
        $profile->user_id = Auth::user()->id;
        $profile->name = $request->name;
        $profile->gender = $request->gender;
        $profile->birth = $request->birth;
        $profile->email = $request->email;
        $profile->pref = $request->pref;
        $profile->save();
        return redirect('home');
    }

    public function postlist()
    {
        $postlist = Post::where('user_id', '=', Auth::user()->id)->get();
        return view('main.postlist', ['postlist' => $postlist]);
    }

    public function store_post(Request $request)
    {
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->badget = $request->badget;
        $post->due = $request->due;
        $post->detail = $request->detail;
        $post->save();
        return redirect('postlist');
    }

    public function post()
    {
        return view('main.post');
    }
}
