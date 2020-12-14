<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      ################ items of category ####################
    public function items(){
        return $this->hasMany('App\Models\Item');
   }
     ################ items of category ####################
}
