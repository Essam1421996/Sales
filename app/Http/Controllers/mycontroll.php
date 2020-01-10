<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class mycontroll extends Controller
{
	public function welcome(){
                       $cats=Categories::all();
        return view('welcome',compact('cats'));            


	}
	public function contact(){

		return view('contact');
	}
	public function login(){return view('auth.login');}
    //
}
