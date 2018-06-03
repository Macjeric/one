<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeBuysController extends Controller
{
    //
    public function calc()
    {
        //
    //    if( isset ($_GET ['Bprice']) && isset($_GET ['Lamount'])){
    //        $Bprice = $_GET ['Bprice'];
    //        $Lamount = $_GET ['Lamount'];
    //        if($Bprice>=$Lamount){
    //         $days = $Bprice/$Lamount;
    //        }else
    //        echo "Not valid input";
           
    //    }
       return view('make-buy');
       
    
    }
}
