<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    public function products(){
        return $this->hasMany('App\Products','cat_id','id');
    }
}
