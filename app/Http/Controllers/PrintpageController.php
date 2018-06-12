<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Printpage;
use App\Post;
use App\Order;
use App\Receive;
use App\Ordernotify;
use App\Requisition;


class PrintpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
         //This for printing Purchase request
         $data = Input::get('checkbox');
         $count = count($data);
         if($count > 0){
             $post = Post:: find($data);
             return view('print.index')->with('data', $post);
         }else{
             return redirect('posts')->with('error','Nothing selected');
         }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         //Printing orders
         //Find the data to be displayed
         $dataa = Input::get('checkbox');
         $count = count($dataa);
         if($count > 0){
             $order = Order:: find($dataa);
             return view('print.order')->with('dataa', $order);
         }else{
             return redirect('order')->with('error','Nothing selected');
         }
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
        //Sho
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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

    public function display()
    {
        //Find the data to be displayed
        $data = Input::get('checkbox');
        $count = count($data);
        if($count > 0){
            $req = Requisition:: find($data);
            return view('requisrep')->with('req', $req);
        }else{
            return redirect('requisition')->with('error','Nothing selected');
        }
    }

    // public function view()
    // {
    // $posts = Post::orderBy('created_at','desc')->paginate(10);
    // return view('print.index')->with('posts', $posts);
    // }

    public function Printorder()
    {
        //Find the data to be displayed
        $dataa = Input::get('checkbox');
        $count = count($dataa);
        if($count > 0){
            $order = Order:: find($dataa);
            return view('print.order')->with('dataa', $order);
        }else{
            return redirect('order')->with('error','Nothing selected');
        }
    }

    public function receive()
    {
        //Find the data to be displayed
        $dataa = Input::get('checkbox');
        $count = count($dataa);
        if($count > 0){
            $receive = Receive:: find($dataa);
            return view('prnt')->with('dataa', $receive);
        }else{
            return redirect('receive')->with('error','Nothing selected');
        }
    }


    public function ordernotify()
    {
        //Find the data to be displayed
        $dataa = Input::get('checkbox');
        $count = count($dataa);
        if($count > 0){
            $order = Ordernotify:: find($dataa);
            return view('ordernotfy')->with('dataa', $order);
        }else{
            return redirect('ordernotify')->with('error','Nothing selected');
        }
    }

    public function others()
    {
        //Find the data to be displayed
        $dataa = Input::get('checkbox');
        $count = count($dataa);
        if($count > 0){
            $order = Requisition:: find($dataa);
            return view('others')->with('dataa', $order);
        }else{
            return redirect('requisition')->with('error','Nothing selected');
        }
    }

}
