<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    // public function news(Request $request)
    // {
    //     return view('news');
    // }

   
}
