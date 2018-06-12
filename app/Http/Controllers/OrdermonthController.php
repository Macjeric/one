<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordernotify;


class OrdermonthController extends Controller
{
    //
    public function ordernotify(Request $request)
    {
        // $dataa = Input::get('select');

        $ordernot = Ordernotify::whereMonth('created_at','=', $request->month)
        ->get();
        return view('ordernotfy')->with('ordernot', $ordernot);
    }
}
