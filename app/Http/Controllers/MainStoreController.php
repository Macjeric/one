<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mainstore;



class MainStoreController extends Controller
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
        $mains = Mainstore::orderBy('created_at','desc')->paginate(10);
            return view('store.index')->with('mains', $mains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('store.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validate goods received forms
         $this->validate($request, [
            'item' => 'required',
            'supplier_name' => 'required',
            'supplier_address' => 'required',
            'maind' => 'required',
            'department' => 'required',
            'quantity' => 'required',
            'price_each' => 'required',
            'total' => 'required',
            'user_id'=> 'required',
        
            ]);

         //goods received creation
         $main = new Mainstore;
         $main->item = $request->input('item');
         $main->supplier_name = $request->input('supplier_name');
         $main->supplier_address = $request->input('supplier_address');
         $main->maind = $request->input('maind');
         $main->department = $request->input('department');
         $main->quantity = $request->input('quantity');
         $main->price_each = $request->input('price_each');
         $main->total = $request->input('total');
         $main->user_id = $request->input('user_id');

         $main->save();

         return redirect('/store')->with('success', 'Post Created');
    
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
        $main = Mainstore::find($id);
        return view('store.show')->with('main', $main);
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
        $main = Mainstore::find($id);
        return view('store.edit')->with('main', $main);
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
        //Validate goods received forms
        $this->validate($request, [
            'item' => 'required',
            'supplier_name' => 'required',
            'supplier_address' => 'required',
            'maind' => 'required',
            'department' => 'required',
            'quantity' => 'required',
            'price_each' => 'required',
            'total' => 'required',
            'user_id'=> 'required',
        
            ]);

         //goods received creation
         $main = Mainstore::find($id);
         $main->item = $request->input('item');
         $main->supplier_name = $request->input('supplier_name');
         $main->supplier_address = $request->input('supplier_address');
         $main->maind = $request->input('maind');
         $main->department = $request->input('department');
         $main->quantity = $request->input('quantity');
         $main->price_each = $request->input('price_each');
         $main->total = $request->input('total');
         $main->user_id = $request->input('user_id');

         $main->save();

         return redirect('/store')->with('success', 'Stock Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $main = Mainstore::find($id);
        $main->delete();
        return redirect('store')->with('success', 'Post Removed');
    }
}
