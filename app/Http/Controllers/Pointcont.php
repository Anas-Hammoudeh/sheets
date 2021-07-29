<?php

namespace App\Http\Controllers;

use App\Models\maktabat;
use Illuminate\Http\Request;

class Pointcont extends Controller
{
    public function index(){
        $lib = maktabat::select('name','address','phonenumber')->get();
        $arr['libs']=$lib;
        return view('points-view',$arr);


    }
}
