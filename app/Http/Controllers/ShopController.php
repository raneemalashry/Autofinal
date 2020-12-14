<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index (){
        $items=Item::latest()->paginate(4);
        return view('shop')->with('items',$items);
    }
    public function ShowItemsInCategory($categoryid){
        $category= Category::find($categoryid);
       $items= $category->items()->paginate(1);
        return view('shop')->with('items',$items);

    }
}
