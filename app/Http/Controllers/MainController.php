<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;
use App\School;
use App\Experience;
use App\Post;
use Auth;

class MainController extends Controller
{
    public function profile()
    {
        $school = School::where('user_id', '=', Auth::user()->id)->first();
        $experience = Experience::where('user_id', '=', Auth::user()->id)->first();
        return view('main.profile', ['user' => Auth::user(), 'school' => $school, 'experience' => $experience]);
    }

    public function school_edit()
    {
        $school = School::where('user_id', '=', Auth::user()->id)->first();
        return view('main.edit.school_info', ['school' => $school]);
    }

    public function store_school_info(Request $request)
    {
        $school = new School;
        $school->user_id = Auth::user()->id;
        $school->school_type = $request->school_type;
        $school->school_name = $request->school_name;
        $school->school_place = $request->school_place;
        $school->school_subject = $request->school_subject;
        $school->seminor = $request->seminor;
        $school->seminor_contains = $request->seminor_contains;
        $school->save();
        return redirect('home');
    }

    public function skill_edit()
    {
        $experience = Experience::where('user_id', '=', Auth::user()->id)->first();
        return view('main.edit.skill_info', ['experience' => $experience]);
    }

    public function store_skill_info(Request $request)
    {
        $experience = new Experience;
        $experience->user_id = Auth::user()->id;
        $experience->work_exp = $request->work_exp;
        $experience->school_exp = $request->school_exp;
        $experience->hackathon_exp = $request->hackathon_exp;
        $experience->intern_exp = $request->intern_exp;
        $experience->pr_exp = $request->pr_exp;
        $skills = json_encode($request->tech);
        $experience->skills = $skills;
        $experience->save();
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
