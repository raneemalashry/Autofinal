<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    ################ category of item ####################
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
      ################ category of item ####################
}
