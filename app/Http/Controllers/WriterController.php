<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{

    public function index()
    {
        $items=\DB::table('writer')->get();
        return view('writer.index')->withItems($items);
    }

    public function create()
    {
        return view('writer.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'writerName'=>'required|max:50'
            
        ]);
        
        \DB::table("writer")->insert([
            'Name'=> $request['writerName']
        ]);
        \Session::flash('msg', 'sucsses opration');
      
        return redirect()->action([WriterController::class, 'index']);
    }


    public function edit($id)
    {
        $writerItem = \DB::table('writer')->where('id', '=', $id)->first();
        //dd($writerItem);
        return view('writer.update')
        ->with('writerItem',$writerItem);
        
    }

    public function update(Request $request, $id)
    {
        \DB::table('writer')->where('id',$id)->update([
            'Name'=> $request['writerName']
        ]);
        \Session::flash('msgINFO', 'sucsses opration');
        return redirect()->action([WriterController::class, 'index']);
    }

    
    public function destroy($id)
    {
        \DB::table('writer')->where('id',$id)->delete();
        \Session::flash('msgDelete', 'sucsses opration');
        return redirect()->action([WriterController::class, 'index']);
    }
}
