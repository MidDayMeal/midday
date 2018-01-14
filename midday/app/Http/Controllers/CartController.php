<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;

class CartController extends Controller
{
    public function index()
    {
    	return view('shop.cart');
    }

    public function store(Request $request)
    {
    	$dupli = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if($dupli->isNotEmpty()){
            return redirect('/cart');
        }
    	Cart::add($request->id,$request->name, 1,$request->price)->associate('App\Product');
    	return back();
    }

    public function destroy($id)
    {
    	Cart::remove($id);

    	return back();
    }

    public function checkout()
    {
        return view('user.checkout');
    }

    public function orders()
    {
        $orders = Cart::restore(Auth::id());
        return view('/orders',compact('$orders'));
    }

    public function ordernow()
    {
        Cart::store(Auth::id());
    }
}
