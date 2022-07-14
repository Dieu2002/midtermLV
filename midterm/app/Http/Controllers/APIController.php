<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;

class APIController extends Controller
{
    
    public function getFoods(){
        $foods=food::all();
        return response()->json($foods);
    }
    public function getOneFoods($id){
        $foods=food::find($id);
        return response()->json($foods);

    }
    
   		
    public function searchfoods(Request $request)
    {
        if($request->keyword == null)
        {
            return DB::all();
        }
        $result = DB::table('foods')
                ->where('name', 'like', "% $request->keyword %")
                ->get();
        return $result;
    }
}
