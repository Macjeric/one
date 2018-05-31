<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeBuysController extends Controller
{
    //
    public function calc(Request $request)
    {
        //
        $Bprice = 5000;
        $Lamount = 50;
        // $days = 'days';
        // if(Lamount>0){
        $days = $Bprice/$Lamount;
        // }
        
        return view('make-buy')->with('days', $days);
    }
}
