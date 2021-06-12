<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class BookController extends Controller
{
    //
     function index()
    {
        $items=\DB::table('book')->get();
        return view('book.index')->withItems($items);
    }
    function create()
    {     $writerItems=\DB::table('writer')->get();
        //dd($writerItems);
         $publisherItems=\DB::table('publisher')->get();
         $categoryItems=\DB::table('category')->get();

        return view('book.create')
        ->with('writerItems',$writerItems)
        ->with('categoryItems',$categoryItems)
        ->with('publisherItems',$publisherItems);
    }

    function edit($id)
    {   //for just one record in dB and for primary key nothing else
        $book = \DB::table('book')->where('id', '=', $id)->first();
        $writerItems=\DB::table('writer')->get();
        $publisherItems=\DB::table('publisher')->get();
        $categoryItems=\DB::table('category')->get();
        
        return view('book.update')
        ->with('writerItems',$writerItems)
        ->with('publisherItems',$publisherItems)
        ->with('category',$categoryItems)
        ->with('book',$book);
    }

    //Actions
    function store(Request $request){
       // dd($request['bookName']);
        $request->validate([
            'bookName'=>'required|max:50',
            'versionNumber'=>'required|min:1'
        ]);
        
        \DB::table("book")->insert([
            'bookName'=> $request['bookName'],
            'versionNumber'=> $request['versionNumber'],
            'writerId'=>$request['writer'],
            'PublisherId'=>$request['publisher'],
            'categoryId'=>$request['category']
        ]);
        \Session::flash('msg', 'sucsses opration');
      
        return redirect()->action([BookController::class, 'index']);
    }

    public function update(Request $request, $id)
    {   //dd($request['bookName']);
       \DB::table('book')->where('id',$id)->update([
            'bookName'=> $request['bookName'],
            'versionNumber'=> $request['versionNumber'],
            'writerId'=>$request['writer'],
            'PublisherId'=>$request['publisher']
        ]);
        \Session::flash('msgINFO', 'sucsses opration');
        return redirect()->action([BookController::class, 'index']);
    }
    public function delete ($id){
     \DB::table('book')->where('id',$id)->delete();
     \Session::flash('msgDelete', 'sucsses opration');
     return redirect()->action([BookController::class, 'index']);
    }

}
