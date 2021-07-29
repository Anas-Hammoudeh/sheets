<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcGradeCont extends Controller
{
    public function index(){
        $majors=[
            '1'=>'علمي',
            '2'=>'ادبي',
            '3'=>'فندقي',
            '4'=>'صناعي',
            '5'=>'زراعي',
            '6'=>'شرعي',


        ];
        $arr['majors']=$majors;

        return view('clac_grade',$arr);
    }
}
