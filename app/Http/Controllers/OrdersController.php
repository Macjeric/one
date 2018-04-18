<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
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
        //Calling the model passing the data into the array
        $orders = Order::orderBy('created_at','desc')->paginate(10);
        return view('orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orders.create');
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
            'item_no' => 'required',
            'description' => 'required',
            'department' => 'required',
            'uom' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total' => 'required',
            ]);

           

        //Purchase request creation
        $order = new Order;
        $order->item_no = $request->input('item_no');
        $order->description = $request->input('description');
        $order->department = $request->input('department');
        $order->quantity = $request->input('quantity');
        $order->uom = $request->input('uom');
        $order->price = $request->input('price');
        $order->total = $request->input('total');
        $order->user_id = auth()->user()->id;
        $order->save();

        return redirect('/orders')->with('success', 'Post Created');

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
        $order = Order::find($id);
        return view('orders.show')->with('order', $order);
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
        $this->validate($request, [
            'item_no' => 'required',
            'description' => 'required',
            'department' => 'required',
            'uom' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total' => 'required',
            ]);

           

        //
        $order = Order::find($id);
        $order->item_no = $request->input('item_no');
        $order->description = $request->input('description');
        $order->department = $request->input('department');
        $order->quantity = $request->input('quantity');
        $order->uom = $request->input('uom');
        $order->price = $request->input('price');
        $order->total = $request->input('total');
        $order->user_id = auth()->user()->id;
        $order->save();

        return redirect('/orders')->with('success', 'Post Created');
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
        $order = Post::find($id);
        $order->delete();
        return redirect('/orders')->with('success', 'Post Removed');
    }
    
}
