<?php

namespace App\Http\Controllers;

use App\Models\Item;


use Illuminate\Http\Request;

use Cart;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\CartFee;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartitems=FacadesCart::content();
       
     return view('cart')->with('cartitems',$cartitems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($itemid)
    {
        $item=Item::find($itemid);
        $request=FacadesCart::add(['id' => $item->id, 'name' => $item->name, 'qty' => 1, 'price' => $item->price, 'options' => ['image' => $item->image,'desc'=>$item->desc]]);
        
        return redirect()->back()->with('success','Product added to cart successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($rowId)
    {
         
        $product = FacadesCart::get($rowId);
        FacadesCart::update($rowId, $product->qty + 1);
     return back()->with('success', 'Product quantity has been increased.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
