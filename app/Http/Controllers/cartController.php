<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Products;
use App\User;
use App\Categories;
class cartController extends Controller
{
    public function add_product($id)
    {

        $cart=new Cart;
        $prod=Products::find($id);
        $cat_id=$prod->cat_id;
        $cat=Categories::find($cat_id);
        $CartContent=Cart::all();


/********************************************/


        if($prod->prod_quantity>0){

             $prod->prod_name=$prod->prod_name;
             $prod->prod_img=$prod->prod_img;
             $prod->cat_id=$prod->cat_id;
             $prod->prod_price=$prod->prod_price;
             $prod->prod_quantity=$prod->prod_quantity-1;
             $prod->save();


        }
else {
    return back();
}






        /**************************/
        foreach ($CartContent as $cartt) {
            if($prod->id==$cartt->prod_id && $prod->prod_name==$cartt->prod_name && $cat->id==$cartt->cat_id && $cat->cat_name==$cartt->cat_name){
              $thiscart=Cart::find($cartt->id);

             $thiscart->prod_id=$cartt->prod_id;
        $thiscart->prod_name=$cartt->prod_name;
        $thiscart->cat_id=$cartt->cat_id;
        $thiscart->cat_name=$cartt->cat_name;
        $thiscart->prod_price=$cartt->prod_price;
        $thiscart->quantity+=1;
        $thiscart->save();
         return back();

            }
        }
        /************************************************/
        $cart->prod_id=$id;
        $cart->prod_name=$prod->prod_name;
        $cart->cat_id=$prod->cat_id;
        $cart->cat_name=$cat->cat_name;
        $cart->prod_price=$prod->prod_price;
        $cart->quantity=1;
        $cart->save();
        return back();
    }
    //
    public function view_cart()
    {
        $CartContent=Cart::all();
        $p=DB::table('carts')->orderby('quantity','Desc')->orderby('prod_price','Desc')-> select('prod_id')->first();
         $admin=User::limit(1)->get();

        $total_price=0;
        foreach ($CartContent as $cart) {
            $total_price=$total_price+($cart->prod_price*$cart->quantity);
        }
        return view('DisplayCart',compact('CartContent','p','total_price','admin'));
    }
    public function delete($cart_id){


        $cart=Cart::find($cart_id);
        $thisprod=Products::find($cart->prod_id);
        if($thisprod==true){
        $thisprod->prod_name= $thisprod->prod_name;
        $thisprod->prod_img= $thisprod->prod_img;
        $thisprod->cat_id= $thisprod->cat_id;
        $thisprod->prod_price= $thisprod->prod_price;
        $thisprod->prod_quantity= $thisprod->prod_quantity+$cart->quantity;
        $thisprod->save();
    }
        $cart->delete();
        return back();


    }
}
