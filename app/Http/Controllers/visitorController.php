<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitor;


class visitorController extends Controller
{
    public function visitor_add(){
      return view('user.visitor.add');
    }

    public function store_visitor(Request $request){
      $visitor=new visitor;
        $visitor['name']=$request->name;
        $visitor['location']=$request->location;
        $visitor['par_location']=$request->par_location;
        $visitor['prisonar_id']=$request->prisonar_id;
        $visitor['gender']=$request->gender;
        $visitor['relative']=$request->relative;
        $visitor['phone']=$request->phone;
        $visitor['time']=$request->time;
      $visitor->save();
      return back();
    }

    public function visitor_all(){
      $all_visitor=visitor::latest()->get();
        return view('user.visitor.all',compact('all_visitor'));
    }

    public function edit_visitor($id){
      $edit_visitor=visitor::find($id);
      return view('user.visitor.edit',compact('edit_visitor'));
    }


    public function update_visitor(Request $request,$id){
      $visitor=visitor::find($id);
        $visitor['name']=$request->name;
        $visitor['location']=$request->location;
        $visitor['par_location']=$request->par_location;
        $visitor['prisonar_id']=$request->prisonar_id;
        $visitor['gender']=$request->gender;
        $visitor['relative']=$request->relative;
        $visitor['phone']=$request->phone;
        $visitor['time']=$request->time;
      $visitor->save();
      return back();
    }

    public function view_visitor($id){
      $view=visitor::find($id);
        return view('user.visitor.view',compact('view'));
    }

    public function delete_visitor($id){
      $delete_visitor=visitor::find($id);
        $delete_visitor->delete();
      return back();
    }
}
