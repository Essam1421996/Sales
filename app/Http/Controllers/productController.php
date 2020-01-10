<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Categories;
use App\Suppliers;
use App\Products;


class productController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function showProducts($id=null){
        $cats=Categories::all();
        $cat=Categories::find($id);
        $admin=User::limit(1)->get();
        $prods=array();
        if($cat!=null)
        $prods= $cat->products()->paginate('',['id','prod_name','prod_img','cat_id','prod_price','prod_quantity']);

        return view('products_view',compact('prods','cats','admin'));
    }
    public function addProduct(Request $request){
        $name=$request->input('name');
        $prod=new Products();
        $prod->prod_name=$name;
        $file=$request->file('img');
        $filename=$file->getClientOriginalName();
        $file->move('images',$filename);
        $prod->prod_img=$filename;
        $prod->cat_id=$request->input('cat_id');
        $prod->prod_price=$request->input('price');
        $prod->prod_quantity=$request->input('quantity');
        $prod->save();
        return back();
    }
    public function editProduct($id,Request $request)
    {
        $prod=Products::find($id);
        $name=$request->input('name');
        $prod->prod_name=$name;
        $prod->prod_price=(integer)request('price');
        $prod->prod_quantity=$request->input('quantity');
        $prod->save();
        return back();
    }
    public function deleteProduct($id){
        $prod=Products::find($id);
        $prod->delete();
        return back();
    }

    public function showSup($prod_id){
        $prods=Products::find($prod_id);
        $sup=array();
       $prod=Products::find($prod_id);
        $admin=User::limit(1)->get();

        if($prod !=null)
            $sup=$prod->suppliers();

        return view('suppliers_view',compact('prods','sup','admin'));
    }
    public function details($id)
    {
        $prod=Products::find($id);
         $admin=User::limit(1)->get();

        return view('details',compact('prod','admin'));

    }
}
