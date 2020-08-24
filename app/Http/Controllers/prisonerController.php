<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prisoner;
use Illuminate\Support\Str;

class prisonerController extends Controller
{
    public function add(){
      return view('user.prisoner.add');
    }


    public function store(Request $request){
      $prisoner=new prisoner;
        $prisoner['name']=$request->name;
        $prisoner['pre_location']=$request->pre_location;
        $prisoner['par_location']=$request->par_location;
        $prisoner['gender']=$request->gender;
        $prisoner['age']=$request->age;
        $prisoner['education']=$request->education;
        $prisoner['Nationality']=$request->Nationality;
        $prisoner['issue_date']=$request->issue_date;
        $prisoner['crime_type']=$request->crime_type;
        $prisoner['release_date']=$request->release_date;
        $prisoner['crime_spot']=$request->crime_spot;
        $image=$request->file('photo');
             if ($image){

               $image_name=Str::random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                   if ($success) {
                   $prisoner['photo']=$image_url;
                   $prisoner->save();
                   return back();
                                 }
                      }
    }


    public function all(){
      $all=prisoner::latest()->where('status',0)->get();
      return view('user.prisoner.all',compact('all'));
    }


    public function view($id){
      $single=prisoner::find($id);
      return view('user.prisoner.single_view',compact('single'));
    }

    public function relese($id){
      $relese=prisoner::find($id);
        $relese['status']=1;
        $relese->save();
        return redirect('presoner-all');
    }

    public function edit($id){
      $edit=prisoner::find($id);
      return view('user.prisoner.edit',compact('edit'));
    }

    public function update(Request $request,$id){
      $update=prisoner::find($id);
            $update['name']=$request->name;
            $update['pre_location']=$request->pre_location;
            $update['par_location']=$request->par_location;
            $update['gender']=$request->gender;
            $update['age']=$request->age;
            $update['education']=$request->education;
            $update['Nationality']=$request->Nationality;
            $update['issue_date']=$request->issue_date;
            $update['crime_type']=$request->crime_type;
            $update['release_date']=$request->release_date;
            $update['crime_spot']=$request->crime_spot;

            $image=$request->file('photo');
                 if ($image){

                   $image_name=Str::random(20);
                   $ext=strtolower($image->getClientOriginalExtension());
                   $image_full_name=$image_name.'.'.$ext;
                   $upload_path='image/';
                   $image_url=$upload_path.$image_full_name;
                   $success=$image->move($upload_path,$image_full_name);
                       if ($success) {
                       $update['photo']=$image_url;

                                     }
                          }
                          $update->save();
                          return redirect('presoner-all');
    }

        public function delete($id){
          $delete=prisoner::find($id);
          $delete->delete();
          return back();
        }

  }
