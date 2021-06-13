<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $books=[];
        $bookItem= new Book();
       // $items=\DB::table('book')->get();
        $items=json_decode(\DB::table('book')->get(), true);
        $writerItems=json_decode(\DB::table('writer')->get(), true);
        $publisherItems=json_decode(\DB::table('publisher')->get(), true);
        $categoryItems=json_decode(\DB::table('category')->get(), true);
        
        for ($i=0; $i <sizeof($items) ; $i++) { 
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
            $books[$i]=$bookItem;
        }
        $encodedSku = json_encode($books);
        return view('home.index');
    }
    
}
