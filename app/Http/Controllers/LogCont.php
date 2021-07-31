<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Reply;
use Illuminate\Http\Request;

class LogCont extends Controller
{
    public function getTicketLog($id)
    {
        $data = Log::select('*')->where('ticket_id', $id)->get();
        $replies= Reply::select('*')->where('ticket_id',$id)->get();
        $arr['replies']=$replies;
        $arr['data'] = $data;


        return view('log_view', $arr);
    }
    public function getAllLogs(){
        $data=Log::select('*')->get();
        $arr['data']=$data;
        return view('all_log',$arr);
    }
}
