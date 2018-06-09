<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeBuysController extends Controller
{
    //
    public function calc()
    {
        if (isset($_POST['submit'])){
            $price = $_POST['price'];
            $lease = $_POST['lease'];
          
            
            echo "The purchase cost would equal the lease cost in :" .($price / $lease);
        }
      
        return view('make-buy');
    
    }
}
