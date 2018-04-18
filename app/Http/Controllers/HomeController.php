<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Receive;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get the loggedIn user ID
        $user_id = auth()->user()->id;
        // $user_id = auth()->user()->department_id;
        //Find the user_id
        $user = User::find($user_id);
        // Return the post for the concerned user only through relation created
        // return view('home')->with('posts', $user->posts);


        return view('home')->with('receives', $user->receives);
        

    }
}
