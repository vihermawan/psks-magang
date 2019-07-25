<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    function index()
    {
     $country_list = DB::table('vektorwilayah')
         ->groupBy('KDPROP')
         ->get();
     return view('User.inputkeluargaterdamping')->with('country_list', $country_list);
    }
}
