<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\VideoViews;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoCont extends Controller
{
    public function vid($id){
        $user=Auth::user();


        $video=Video::find($id);


        $watched= VideoViews::select('user_id','video_id')->where([['user_id',$user->id],['video_id',$id]])->get();
        if(!$watched) {
            VideoViews::create([

                'video_id' => $video->id,
                'user_id' => $user->id,
            ]);
            $video->views= $video->views+1;
            $video->save();

        }
        $data= $video->views;
        $arr['data']=$data;
        return view('video-view',$arr);


    }
    public function vidd(){
        return view('video-view');
    }
}
