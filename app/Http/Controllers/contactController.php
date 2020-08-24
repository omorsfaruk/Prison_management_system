<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class contactController extends Controller
{
    public function contact(){
      return view('user.contact');
    }

    public function store_contact(Request $request){
      $contact=new contact;
        $contact['fname']=$request->fname;
        $contact['lname']=$request->lname;
        $contact['email']=$request->email;
        $contact['comment']=$request->comment;
     $contact->save();
     return back();
    }
}
