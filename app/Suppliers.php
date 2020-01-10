<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    public function products(){
        return $this->belongsToMany('App\Products','product_supplier_relationship','sup_id','prod_id');
    }
}
