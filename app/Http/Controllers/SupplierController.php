<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $supplier = Supplier::all();
        return view('Supplier.index')->with('supplier', $supplier);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Supplier.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Stores the filled Items
        $this->validate($request, [
            'supplier_name' => 'required',
            'supplier_address' => 'required',
            'supplier_contact' => 'required',
            'supplier_goods' => 'required',
            'supplier_discounts' => 'required',
            ]);


            $supply = new Supplier;
            $supply->supplier_name = $request->input('supplier_name');
            $supply->supplier_address = $request->input('supplier_address');
            $supply->supplier_contact = $request->input('supplier_contact');
            $supply->supplier_goods = $request->input('supplier_goods');
            $supply->supplier_discounts = $request->input('supplier_discounts');
            $supply->user_id = auth()->user()->id;
            $supply->save();
    
            return redirect('/Supplier')->with('success', 'Post Created');
    
            

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supply = Supplier::find($id);
        return view('Supplier.show')->with('supply', $supply);
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
        $supply = Supplier::find($id);
        return view('Supplier.edit')->with('supply', $supply);
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
            'supplier_name' => 'required',
            'supplier_address' => 'required',
            'supplier_contact' => 'required',
            'supplier_goods' => 'required',
            'supplier_discounts' => 'required',
            ]);


            $supply = Supplier::find($id);
            $supply->supplier_name = $request->input('supplier_name');
            $supply->supplier_address = $request->input('supplier_address');
            $supply->supplier_contact = $request->input('supplier_contact');
            $supply->supplier_goods = $request->input('supplier_goods');
            $supply->supplier_discounts = $request->input('supplier_discounts');
            $supply->user_id = auth()->user()->id;
            $supply->save();
    
            return redirect('/Supplier')->with('success', 'Post Updated');
    
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
        $supply = Supplier::find($id);
        $supply->delete();
        return redirect('/Supplier')->with('success', 'Supplier Removed');
    }
}
