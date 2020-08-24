<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gurd;

class gurdController extends Controller
{
    public function add(){
      return view('user.gurd.add');
    }

    public function gurd_store(Request $request){
      $gurd=new gurd;
        $gurd['fname']=$request->fname;
        $gurd['lname']=$request->lname;
        $gurd['phone']=$request->phone;
        $gurd['date']=$request->date;
        $gurd['time']=$request->time;
        $gurd['ide']=$request->id;

      $gurd->save();
      return back();

    }

    public function gurd_all(){
      $all_gurd=gurd::all();
      return view('user.gurd.all',compact('all_gurd'));
    }

    public function edit($id){
      $edit=gurd::find($id);
      return view('user.gurd.edit',compact('edit'));
    }

    public function update(Request $request,$id){
      $update=gurd::find($id);
          $update['fname']=$request->fname;
          $update['lname']=$request->lname;
          $update['phone']=$request->phone;
          $update['date']=$request->date;
          $update['time']=$request->time;
          $update['ide']=$request->id;
      $update->save();
      return redirect('gurd-add');
    }

    public function delete($id){
      $delete=gurd::find($id);
      $delete->delete();
      return back();
    }



}
