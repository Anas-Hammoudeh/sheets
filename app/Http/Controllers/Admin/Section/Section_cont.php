<?php

namespace App\Http\Controllers\Admin\Section;

use App\Http\Controllers\Controller;
use App\Models\Model\Section;
use App\Models\User;
use Illuminate\Http\Request;

class Section_cont extends Controller
{
   public function add(Request $request){
       if($request->isMethod('post')) {
       $section=Section::create($request->all());
       return redirect()->back();
       }
       else{
           $users = User::select('id', 'name')->where('role', 'user')->get();
           $arr['users'] = $users;
           return view('Admin.Section.add-section', $arr);
       }
   }
   public function update(Request $request,$id){
       $section=Section::find($id);
       if($request->isMethod('post')){
           $section->name=$request->input('name');


       }
       else{
           $users = User::select('id', 'name')->where('role', 'user')->get();
           $arr['users'] = $users;
           $arr['section']=$section;
           return view('Admin.Section.update-view',$arr);

       }
   }

}
