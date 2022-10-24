<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DateController extends Controller
{
   public function index(){
    $data = DB::table('dates')->get();

    return view('index',['dates'=>$data->toJson()]);
   }
}
