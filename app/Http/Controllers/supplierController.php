<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Products;
use App\Suppliers;
use App\Categories;


class supplierController extends Controller
{
    //

    public function showSup($prod_id)
    {

        $prod= Products::find($prod_id);
        $admin=User::limit(1)->get();

        $supp=array();
        if($prod!=null)
            $supp=$prod->suppliers;
        return view('suppliers_view',compact('supp','prod_id','admin'));
    }
    
    public function addSup($id, Request $request)
    {
        $name=$request->input('name');
        $supp=new Suppliers();
        $supp->sup_name=$name;
        $supp->save();
        $supp->products()->attach([$supp->id,$id]);
        return back();
    }
    public function editSup($id,Request $request)
    {
        $supp=Suppliers::find($id);
        $name=$request->input('name');
        $supp->sup_name=$name;
        $supp->save();
        return redirect('show_sup');
    }
    public function deleteSup($id)
    {
        $sup=Suppliers::find($id);
        $sup->delete();
        return back();
    }

}
