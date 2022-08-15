<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(Request $request): View
    {
        // $query = $request->all();
        // return view('welcome',compact('query'));
      
        return view('welcome');
    }

    public function register(Request $request): RedirectResponse
    {
         
        $user = User::create([
            "username" => $request->get('username'),
            "password" => Hash::make($request->get('password'))
           
        ]);
        UserInformation::create([
            "user_id" => $user->id,
            "name" => $request->get('name'),
            "birthday" => $request->date('birthday')
  
        ]);

        //dd($request->all());
        return to_route('home');
    }

    
    public function news()
    {
        return view('news');
    }
    public function post(Request $request)
    {
        $query = $request->all();
        return view('post',compact('query'));
        //return view('post');
    }

   
}
