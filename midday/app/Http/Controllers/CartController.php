<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
    	return view('shop.cart');
    }

    public function store(Request $request)
    {
    	Cart::add($request->id,$request->name, 1,$request->price)->associate('App\Product');
    	return back();
    }

    public function destroy($id)
    {
    	Cart::remove($id);

    	return back();
    }
}
