<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeBuysController extends Controller
{
    //
    public function calc(Request $request)
    {
        //
        $lamount = $request->input('Lamount');
        $bprice = $request->input('Bprice');

    //    if( isset ($_GET ['Bprice']) && isset($_GET ['Lamount'])){
    //        $Bprice = $_GET ['Bprice'];
    //        $Lamount = $_GET ['Lamount'];
        //    if($bprice > $lamount){
        //     $days = $bprice / $lamount;
        //    }else
           echo $lamount;
           
       return view('make-buy');
       
    
    }
}
