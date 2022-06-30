<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests\NewsRequest;

class NewController extends Controller

{
    // crud 
    public function index(){
        return view('test');
    }
    public function getAdminAdd(){
        return view ('News.addNews');
    }
    public function getIndexAdmin(){
        $news = News ::all();
        return view('News.adminNews', compact('news')); 
    }
    public function postAdminAdd(Request $request){
            $news= new News();
            if ($request->hasFile('inputImage')){
                $file = $request -> file ('inputImage');
                $fileName=$file->getClientOriginalName('inputImage');
                $file->move('/Image',$fileName);
            }
            $fileName=null;
            if ($request->file('inputImage')!=null){
                $file_name=$request->file('inputImage')->getClientOriginalName();
            }
            $news->Title=$request->inputTitle;
            $news->Author=$request->inputAuthor;
            $news->Date=$request->inputDate;
            $news->Image=$file_name;
            $news->Description=$request->inputDescription;
            $news->save();
            return redirect('/showad')->with('success', 'Đã thêm thành công');
    
    }
    public function  Editform(){
            return view ('News.editNews');
    }
    
    public function getAdminEdit($id){
            $news = News::find($id);
            return view('News.editNews')->with('news',$news);
    }
    
    public function postAdminEdit(Request $request){
            $id = $request->editId;
    
            $news = News::find($id);
            if($request->hasFile('editImage')){
                $file = $request -> file ('editImage');
                $fileName=$file->getClientOriginalName('editImage');
                $file->move('/Image',$fileName);
            }
            if ($request->file('editImage')!=null){
                $news ->image=$fileName;
            }
            $news->Title=$request->editTitle;
            $news->Author=$request->editAuthor;
            $news->Date=$request->editDate;
            $news->description=$request->editDescription;
            $news->save();
            return redirect('/showad');
    }
    public function postAdminDelete($id){
            $news =News::find($id);
            $news->delete();
            return redirect('/showad');//chuyển trang 
    }
}
