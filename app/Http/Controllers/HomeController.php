<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
   
    
  
   
    public function index()
    {   
        $books=$this->read();
           
        
        return view('home.index')->with('result',$books);
    }

    function search(Request $request){
        $booksss = [];
        $r = $request['search'];
        $books =$this -> read();
       $count = 0;
        for($i = 0; $i < sizeof($books); $i++){
            $book=$books[$i];
            if($book['bookName'] == $r
             || $book['publisherName'] == $r
             || $book['writerName'] == $r){

                $booksss[$i] = $books[$i];
                $count +=1;
            }   
        }
        //dd($booksearch);
        return view('home.search')->with('booksss',$booksss);
    }

    function read(){
        $booksearch = [];
        $items=json_decode(\DB::table('book')->where('isDelete' ,'=', 1)->get(), true);
        $writerItems=json_decode(\DB::table('writer')->get(), true);
        $publisherItems=json_decode(\DB::table('publisher')->get(), true);
        $categoryItems=json_decode(\DB::table('category')->get(), true);
        //************************************* */
        for ($i=0; $i <sizeof($items) ; $i++) { 
            $bookItem= new Book();
            $id= $items[$i]['id'];
            $bookItem->id = $id;
           
            $bookItem->bookName = $items[$i]['bookName'];
            $bookItem->writerId = $items[$i]['writerId'];
            $bookItem->PublisherId = $items[$i]['PublisherId'];
            $bookItem->versionNumber = $items[$i]['versionNumber'];
            $bookItem->categoryid = $items[$i]['categoryid'];
           // dd($writerItems);
            foreach ($writerItems as $writer) {
                 if ($writer['id'] == $bookItem->writerId) {
                    $bookItem->writerName=$writer['Name'];
                 }
             }

             
            foreach ($publisherItems as $publisher) {
                if ($publisher['id'] == $bookItem->PublisherId) {
                   $bookItem->publisherName=$publisher['publisherName'];
                }
             }

             
            foreach ($categoryItems as  $category) {
                if ($category['id'] ==  $bookItem->categoryid) {
                   $bookItem->categoryName=$category['Name'];
                }
            }
            $booksearch[$i]=$bookItem;
        }
        return $booksearch;
    }
    
}
