<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Products;
use App\Categories;

class categoryController extends Controller
{
    //
   

    public function showAllCat(){

        $cats=Categories::all();
         $admin=User::limit(1)->get();

        return view('categories',compact('cats','admin'));
    }

    public function edit($id, Request $request){

        $cat =Categories::find($id);
        $cat_name=$request->input('name');
        $cat->cat_name=$cat_name;
        $cat->save();
        return back();



    }

    public function deleteCat($cat_id){
        $cat=Categories::find($cat_id);
        $cat->delete();

        return back();
    }

    public function addCat(Request $request){
       $cat = new Categories();
        $cat->cat_name=request('name');
       $cat->save();

       return redirect('categories');
    }
}
