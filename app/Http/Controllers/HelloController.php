<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){

        return 'Hello';
    }
    public function index2(Request $request){
        return view('hello');
    }
    
  
}
