<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        
       // $query = $request->all(['oleg']);
        $query = $request->all();
        return view('welcome',compact('query'));
    }

    // public function php(Request $request){
    //     dd($request);
    //     //return view('index');
    // }
    // public function news(Request $request)
    // {
    //     return view('news');
    // }

   
}
