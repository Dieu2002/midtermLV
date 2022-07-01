<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoodRequest;
use App\Models\food;

class FoodController extends Controller
{
     
    // crud 
    public function getIndexHome(){
        $new_food=food::all();
        return view('homepg',compact('new_food'));
    }
    public function getAdminAdd(){
        return view ('addForm');
        }
        public function getIndexAdmin(){
        $foods = food ::all();
        return view('admin', compact('foods')); 
        }
        public function postAdminAdd(Request $request){
            $food= new food();
            // if ($request->hasFile('inputImage')){
            //     $file = $request -> file ('inputImage');
            //     $fileName=$file->getClientOriginalName('inputImage');
            //     $file->move('',$fileName);
            // }
            // $fileName=null;
            // if ($request->file('inputImage')!=null){
            //     $file_name=$request->file('inputImage')->getClientOriginalName();
    
            // }
            $food->name=$request->inputName;
            $food->image=$request->inputImage;
            $food->price=$request->inputPrice;
            $food->oldprice=$request->inputOldPrice;
            $food->description=$request->inputDescription;
            $food->save();
            return redirect('/showadmin')->with('success', 'Đã thêm thành công');
    
        }
    }


