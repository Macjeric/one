<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input; 
use Carbon\Carbon;
use App\Receive;



class MonthsController extends Controller
{
    //
    public function receive(Request $request)
    {
        // $dataa = Input::get('select');

        $rece = Receive::whereMonth('created_at','=', $request->month)
        ->get();
        return view('print')->with('rece', $rece);

    }

    
}
