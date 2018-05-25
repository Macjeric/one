<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;
use App\Requisition;




class RequisReportController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $var = DB::table ('requisitions')->find($id); 

       $requis = DB::table ('requisitions')->join('users', 'requisitions.user_id', '=', 'users.id')->select('*')->where('users.id', Auth::user()->id)->get(); 
       //Get the loggedIn user ID
    //    $user_id = auth()->user()->id;
       // $user_id = auth()->user()->department_id;
       //Find the user_id
    //    $requis = User::find($user_id);
    //    $user_id->requisition;
    //    echo "$requis";
       // Return the post for the concerned user only through relation created
        // $report = Requisition::orderBy('created_at','desc')->paginate(10);
        // $requisitions = Requisition::orderBy('created_at','desc')->paginate(10);        
        return view('report', compact('requis','var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
