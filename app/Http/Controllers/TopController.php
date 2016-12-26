<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TopController extends Controller
{

    public function __construct()
    {
        $this->middleware('login');
    }

    public function home()
    {
        return view('top.home');
    }
}
