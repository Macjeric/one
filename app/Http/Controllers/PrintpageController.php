<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Printpage;
use Illuminate\Support\Facades\Input;
use App\Post;
use App\Order;


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

    public function display()
    {
        //Find the data to be displayed
        $data = Input::get('checkbox');
        $count = count($data);
        if($count > 0){
            $post = Post:: find($data);
            return view('print.index')->with('data', $post);
        }else{
            return redirect('posts')->with('error','Nothing selected');
        }
    }

    public function view()
    {
    $posts = Post::orderBy('created_at','desc')->paginate(10);
    return view('print.index')->with('posts', $posts);
    }

    public function Printorder()
    {
        //Find the data to be displayed
        $data = Input::get('checkbox');
        $count = count($data);
        if($count > 0){
            $order = Order:: find($data);
            return view('print.order')->with('data', $order);
        }else{
            return redirect('order')->with('error','Nothing selected');
        }
    }


}
