<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
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
        //Calling the model and pass the data into an array
        // $posts = DB::select('SELECT FROM * posts');(use Illuminate\Support\Facades\DB;)
        // $posts = Post::all();
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('posts.create');
      
    
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
            'StockName' => 'required',
            'StockNumber' => 'required',
            'Department' => 'required',
            'Discount' => 'required',
            'Quantity' => 'required',
            'PriceInfo' => 'required',
            'TAX' => 'required',
            ]);

           

        //Purchase request creation
        $post = new Post;
        $post->StockName = $request->input('StockName');
        $post->StockNumber = $request->input('StockNumber');
        $post->Quantity = $request->input('Quantity');
        $post->PriceInfo = $request->input('PriceInfo');
        $post->TAX = $request->input('TAX');
        $post->Discount = $request->input('Discount');
        $post->Department = $request->input('Department');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, [
            'StockName' => 'required',
            'StockNumber' => 'required',
            'Department' => 'required',
            'Discount' => 'required',
            'Quantity' => 'required',
            'PriceInfo' => 'required',
            'TAX' => 'required',
            
        ]);

        //Post creation
        $post = Post::find($id);
        $post->StockName = $request->input('StockName');
        $post->StockNumber = $request->input('StockNumber');
        $post->Quantity = $request->input('Quantity');
        $post->PriceInfo = $request->input('PriceInfo');
        $post->TAX = $request->input('TAX');
        $post->Discount = $request->input('Discount');
        $post->Department = $request->input('Department');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    
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
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }

   
}
