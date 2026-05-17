<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = \App\Models\Cart::with('product')
                    ->where('user_id', auth()->id())
                    ->get();

        return view('cart.index', compact('carts'));
    }

    public function add(Request $request)
    {
        $productId = $request->product_id;

        $cart = Cart::where('user_id', Auth::id())
                    ->where('product_id', $productId)
                    ->first();

        if($cart){

            $cart->quantity += 1;
            $cart->save();

        } else {

            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }

        return response()->json([
            'success' => true
        ]);
    }
    public function plus($id)
    {
        $cart = Cart::findOrFail($id);

        $cart->quantity += 1;
        $cart->save();

        return back();
    }

    public function minus($id)
    {
        $cart = Cart::findOrFail($id);

        if($cart->quantity > 1){

            $cart->quantity -= 1;
            $cart->save();

        } else {

            $cart->delete();
        }

        return back();
    }
}