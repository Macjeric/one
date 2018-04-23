<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Admin;

class AdminsController extends Controller
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
    public function index()
    {
        //
        $admins = Admin::all();;
        return view('Admin.index')->with('admins', $admins);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To show the required create page when its clicked
        return view('Admin.create');
        
        
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
        //Validate goods_received forms
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'department' => 'required',
            ]);


        //goods received creation
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'department' => $data['department'],
            ]);

         return redirect('/Admin')->with('success', 'User have been Registered');
            
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
        $admin = Admin::find($id);
        return view('Admin.edit')->with('admin', $admin);
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
        //public function update(Request $request, $id)
        {
        //Validate goods_received forms
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'department' => 'required',
            ]);

            //goods received creation
            $admin = Admin::find($id);
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = $request->input('password');
            $admin->department = $request->input('department');

            $receive->save();
        }
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
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/Admin')->with('success', 'User Removed');
    }
}
