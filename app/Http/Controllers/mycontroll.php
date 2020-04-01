<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Categories;
use App\User;
use App\Products;


class mycontroll extends Controller
{
	public function welcome(){
                       $cats=Categories::all();
        return view('welcome',compact('cats'));            


	}
	public function contact(){

		return view('contact');
	}
	public function contact2(){
		 $admin=User::limit(1)->get();

		return view('contact2',compact('admin'));
	}
	
	public function login(){return view('auth.login');}
    //
}
