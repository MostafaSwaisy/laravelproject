<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publisherController extends Controller
{
 
    public function index()
    {
        $items=\DB::table('publisher')->where('isDelete' ,'=', 1)->get();
        return view('publisher.index')->withItems($items);
    }

    public function create()
    {
        return view('publisher.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'publisherName'=>'required|max:50'
            
        ]);
        
        \DB::table("publisher")->insert([
            'publisherName'=> $request['publisherName'],
            'isDelete' => 1
        ]);
        \Session::flash('msg', 'sucsses opration');
      
        return redirect()->action([publisherController::class, 'index']);
    }


   
    public function edit($id)
    {
        $publisherItem = \DB::table('publisher')->where('id', '=', $id)->first();
        //dd($writerItem);
        return view('publisher.update')
        ->with('publisherItem',$publisherItem);
    }

    public function update(Request $request, $id)
    {
        \DB::table('publisher')->where('id',$id)->update([
            'publisherName'=> $request['publisherName']
        ]);
        \Session::flash('msgINFO', 'sucsses opration');
        return redirect()->action([publisherController::class, 'index']);
    }

   
    public function destroy($id)
    {
        \DB::table('publisher')->where('id',$id)->update([
            'isDelete'=> 0
        ]);
        \Session::flash('msgDelete', 'sucsses opration');
        return redirect()->action([publisherController::class, 'index']);
    }
}
