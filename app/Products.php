<?php

namespace App;
use App\User;
use App\Categories;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //

    public function categories(){
        return $this->belongsTo('App\Categories');
    }
    public function suppliers(){
        return $this->belongsToMany('App\Suppliers','product_supplier_relationship','prod_id','sup_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','carts','prod_id','user_id');
    }

}
