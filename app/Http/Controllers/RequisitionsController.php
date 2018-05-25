<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisition;
use App\User;

class RequisitionsController extends Controller
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
    
        $requisitions = Requisition::orderBy('created_at','desc')->paginate(10);
        return view('requisition.index')->with('requisitions', $requisitions);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('requisition.create');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Making sure that the forms are filled
        $this->validate($request, [
            'description' => 'required',
            'quantity' => 'required',
            'department' => 'required',
            ]);
            
        $requisition = new Requisition;
        $requisition->description = $request->input('description');
        $requisition->quantity = $request->input('quantity');
        $requisition->department = $request->input('department');
        $requisition->user_id = auth()->user()->id;
        $requisition->save();

        return redirect('/requisition')->with('success', 'Requisition Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find the required ID and displaying it
        $requisition = requisition::find($id);
        return view('requisition.show')->with('requisition', $requisition);
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
        $requisition = Requisition::find($id);
        return view('requisition.edit')->with('requisition', $requisition);
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
        $this->validate($request, [
            'description' => 'required',
            'quantity' => 'required',
            'department' => 'required',

            ]);
            
        $requisition = Requisition::find($id);
        $requisition->description = $request->input('description');
        $requisition->quantity = $request->input('quantity');
        $requisition->department = $request->input('department');
        $requisition->user_id = auth()->user()->id;
        $requisition->save();

        return redirect('/requisreport.index')->with('success', 'Requisition Updated');
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
