<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
    public function index()
    {
        $items=\DB::table('category')->where('isDelete' ,'=', 1)->get();
        return view('category.index')->withItems($items);
    }

    public function create()
    {
        return view('category.create');
    }

    
    public function store(Request $request)
    {
         $request->validate([
            'categoryName'=>'required|max:50'
            
        ]);
        
        \DB::table("category")->insert([
            'Name'=> $request['categoryName'],
            'isDelete' => 1
        ]);
        \Session::flash('msg', 'sucsses opration');
      
        return redirect()->action([CategoryController::class, 'index']);
    }


  
    public function edit($id)
    {
        $categoryItem = \DB::table('category')->where('id', '=', $id)->first();
        //dd($writerItem);
        return view('category.update')
        ->with('categoryItem',$categoryItem);
    }

    public function update(Request $request, $id)
    {
        
        \DB::table('category')->where('id',$id)->update([
            'Name'=> $request['categoryName']
        ]);
        \Session::flash('msgINFO', 'sucsses opration');
        return redirect()->action([CategoryController::class, 'index']);
    }

 
    public function destroy($id)
    {
        \DB::table('category')->where('id',$id)->update([
            'isDelete'=> 0
        ]);
        \Session::flash('msgDelete', 'sucsses opration');
        return redirect()->action([CategoryController::class, 'index']);
    }
}
