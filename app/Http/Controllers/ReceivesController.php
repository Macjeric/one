<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Receive;


class ReceivesController extends Controller
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
        
        // return view('receive.index')->with('receives', $receives);

        // $receives = DB::table('receives')
        //     ->join('department', 'receives.department_id', '=', 'department.id')   
        //     ->join('users', 'receives.user_id', '=', 'users.id')        
        //     ->select('receives.*', 'department.name', 'users.name AS username')
        //     ->get();
            $receives = Receive::orderBy('created_at','desc')->paginate(10);
            return view('receive.index')->with('receives', $receives);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To show the required create page when its clicked
        return view('receive.create');
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
            'supplier_name' => 'required',
            'supplier_address' => 'required',
            'received' => 'required',
            'department' => 'required',
            'quantity' => 'required',
            'price_each' => 'required',
            'total' => 'required',
            'user_id'=> 'required',
        
            ]);

         //goods received creation
         $receive = new Receive;
         $receive->item = $request->input('item');
         $receive->supplier_name = $request->input('supplier_name');
         $receive->supplier_address = $request->input('supplier_address');
         $receive->received = $request->input('received');
         $receive->department = $request->input('department');
         $receive->quantity = $request->input('quantity');
         $receive->price_each = $request->input('price_each');
         $receive->total = $request->input('total');
         $receive->user_id = $request->input('user_id');

         $receive->save();

         return redirect('/receive')->with('success', 'Post Created');
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
        $receive = Receive::find($id);
        return view('receive.show')->with('receive', $receive);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receive = Receive::find($id);
        return view('receive.edit')->with('receive', $receive);
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
        //Validate goods_received forms
        $this->validate($request, [
            'item' => 'required',
            'supplier_name' => 'required',
            'supplier_address' => 'required',
            'department' => 'required',
            'received' => 'required',
            'quantity' => 'required',
            'price_each' => 'required',
            'total' => 'required',
            'user_id'=> 'required',
           
        
            ]);

         //goods received creation
         $receive = Receive::find($id);
         $receive->item = $request->input('item');
         $receive->supplier_name = $request->input('supplier_name');
         $receive->supplier_address = $request->input('supplier_address');
         $receive->received = $request->input('received');
         $receive->department = $request->input('department');
         $receive->quantity = $request->input('quantity');
         $receive->price_each = $request->input('price_each');
         $receive->total = $request->input('total');
         $receive->user_id = $request->input('user_id');

         $receive->save();

         return redirect('/receive')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find the post and delete it
        $receive = Receive::find($id);
        $receive->delete();
        return redirect('/receive')->with('success', 'Post Removed');
    }
    
}
