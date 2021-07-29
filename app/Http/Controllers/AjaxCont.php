<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class AjaxCont extends Controller
{
    public function fill(){
        $users=User::all();
        $arr['users']=$users;
        return view('points-view',$arr);



    }
    public function getdata(Request $request){
        $id = $request->course;
        $data= Course::select('*')->where('id',$id)->get();
        $teach=Teacher::select('name')->where('course_id',$id)->get();

        return response()->json(['data'=>$data, 'tech'=>$teach])
            ;




    }
}
