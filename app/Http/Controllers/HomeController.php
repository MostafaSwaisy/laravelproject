<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
   
    
  
   
    public function index()
    {   
        $booksearch = [];
        $count = 0;
        $items=json_decode(\DB::table('book')->get(), true);
        
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
            $bookItem->categoryid = $items[$i]['PublisherId'];
            
            foreach ($writerItems as $key => $writer) {
                 if ($writer['id']=$items[$i]['id']) {
                    $bookItem->writerName=$writer['Name'];
                 }
             }

             
            foreach ($publisherItems as $key => $publisher) {
                if ($writer['id']=$items[$i]['id']) {
                   $bookItem->publisherName=$publisher['publisherName'];
                }
             }

             
            foreach ($categoryItems as $key => $category) {
                if ($category['id']=$items[$i]['id']) {
                   $bookItem->categoryName=$writer['Name'];
                }
            }
            $booksearch[$count]=$bookItem;
            $count += 1; 
           
        }
        
       $result = json_encode($booksearch);
        return view('home.index')->with('result',$booksearch);
    }

    function search(Request $request){
        $booksss = [];
        $booksearch = [];
        
        $r = $request['search'];
        
        $items=json_decode(\DB::table('book')->get(), true);
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
                if ($category['id'] ==  $bookItem->PublisherId) {
                   $bookItem->categoryName=$category['Name'];
                }
            }
            $booksearch[$i]=$bookItem;
        }
       $count = 0;
        $result = json_encode($booksearch);
        for($i = 0; $i < sizeof($booksearch); $i++){
            $book=$booksearch[$i];
            if($book['bookName'] == $r || $book['publisherName'] == $r){
                $booksss[$i] = $book['bookName'];
                $count +=1;
            }   
        }
        //dd($booksearch);
        return view('home.search')->with('booksss',$booksss);
    }


    
}
