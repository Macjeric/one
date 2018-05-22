<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordernotify;
use App\Receive;
use App\User;
use App\Post;






class OrdernotifyController extends Controller
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
        $notifies = Ordernotify::orderBy('created_at','desc')->paginate(10);
            return view('ordernotify.index')->with('notifies', $notifies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ordernotify.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validate goods_received forms
         $this->validate($request, [
            'item' => 'required',
            'department' => 'required',
            // 'user_id'=> 'required',
            'quantity'=> 'required',
            
        
            ]);

         //goods received creation
         $notify = new Ordernotify;
         $notify->item = $request->input('item');
         $notify->quantity = $request->input('quantity');         
         $notify->department = $request->input('department');
         $notify->user_id = auth()->user()->id;

         $notify->save();

         return redirect('/ordernotify');
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
