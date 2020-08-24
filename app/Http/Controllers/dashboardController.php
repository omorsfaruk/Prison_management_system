<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;
use Illuminate\Support\Facades\Hash;

class dashboardController extends Controller
{
    public function index(){
      return view('user.index');
    }

    public function register_form(){
      return view('user.register');
    }
    public function logout(){
      Auth::logout();
      return redirect()->route('login');
    }

    public function register_store(Request $request){
      $user=new User;
        $user['name']=$request->name;
        $user['email']=$request->email;
        $user['password']=Hash::make($request->password);
      $user->save();
      return redirect('/');
    }
}
