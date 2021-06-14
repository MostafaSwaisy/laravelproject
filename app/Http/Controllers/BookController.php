<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class BookController extends Controller
{
    //
     function index()
    {
        $books = app('App\Http\Controllers\HomeController')->read();
        $items=\DB::table('book')->where('isDelete' ,'=', 1)->get();
        return view('book.index')->withItems($books);
    }
    function create()
    {     $writerItems=\DB::table('writer')->where('isDelete' ,'=', 1)->get();
        //dd($writerItems);
         $publisherItems=\DB::table('publisher')->where('isDelete' ,'=', 1)->get();
         $categoryItems=\DB::table('category')->where('isDelete' ,'=', 1)->get();

        return view('book.create')
        ->with('writerItems',$writerItems)
        ->with('categoryItems',$categoryItems)
        ->with('publisherItems',$publisherItems);
    }

    function edit($id)
    {   //for just one record in dB and for primary key nothing else
        $book = \DB::table('book')->where('id', '=', $id)->first();
        $writerItems=\DB::table('writer')->where('isDelete' ,'=', 1)->get();
        $publisherItems=\DB::table('publisher')->where('isDelete' ,'=', 1)->get();
        $categoryItems=\DB::table('category')->where('isDelete' ,'=', 1)->get();
        
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

        $count = \DB::table('book')
        ->where('bookName', $request['bookName'])
        ->where('versionNumber',  $request['versionNumber'])
        ->count();
        if($count > 0){
            \Session::flash('msgDelete', "can't add your book Already exist ");
            return redirect()->action([BookController::class, 'create']);
        
        }else {
            \DB::table("book")->insert([
                'bookName'=> $request['bookName'],
                'versionNumber'=> $request['versionNumber'],
                'writerId'=>$request['writer'],
                'PublisherId'=>$request['publisher'],
                'categoryId'=>$request['category'],
                'isDelete' => 1
            ]);
            \Session::flash('msg', 'sucsses opration');
      
        return redirect()->action([BookController::class, 'index']);
        }
        
        
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
        
    
     \DB::table('book')->where('id',$id)->update([
        'isDelete'=> 0
    ]);
     \Session::flash('msgDelete', 'sucsses opration');
     return redirect()->action([BookController::class, 'index']);
    }

}
