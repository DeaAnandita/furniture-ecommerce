<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Checkout Process
     */
    public function store(Request $request)
    {
        // AMBIL CART USER
        $carts = Cart::with('product')
                    ->where('user_id', auth()->id())
                    ->get();

        // CEK KOSONG
        if($carts->count() < 1){

            return redirect('/cart')
                ->with('error', 'Cart masih kosong');

        }

        // HITUNG TOTAL
        $total = 0;

        foreach($carts as $cart){

            $total += $cart->product->price * $cart->quantity;

        }

        // CREATE ORDER
        $order = Order::create([

            'user_id' => auth()->id(),

            'total_price' => $total,

            'payment_status' => 'pending'

        ]);

        // CREATE ORDER ITEMS
        foreach($carts as $cart){

            OrderItem::create([

                'order_id' => $order->id,

                'product_id' => $cart->product_id,

                'quantity' => $cart->quantity,

                'price' => $cart->product->price

            ]);

        }

        // HAPUS CART
        Cart::where('user_id', auth()->id())->delete();

        // REDIRECT
        return redirect('/cart')
            ->with('success', 'Checkout berhasil! Silakan lakukan pembayaran dan tunggu konfirmasi admin.');

    }
}