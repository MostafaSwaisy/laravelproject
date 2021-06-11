<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
class AdminController extends Controller
{
    //
    function check (){
        return view('login');
    }

   public function actionStart(Request $request){
        
        if ($request['Username']='Admin' 
            && $request['password']='Admin') {
                dd($request['Username']);
                return redirect('/book/index');    
            }else {
                dd($request['Username']);
                \Session::flash('msgDelete', 'sucsses opration');
                return redirect()->action([AdminController::class, 'check']);   
            }


    }
}
