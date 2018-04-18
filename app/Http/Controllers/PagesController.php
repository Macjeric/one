<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Authorize data accordingly

    public function index(){
        //return view('pages.index', compact('title'));
        return view('pages.index');
    }

    public function purchases(){
        return view('pages.purchases');
    }

    public function stockmng(){
        return view('pages.stockmng');
    }
}
