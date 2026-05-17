<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = session('cart', []);

        // ❗ kalau cart kosong
        if (empty($cart)) {
            return back()->with('error', 'Cart kosong');
        }

        // 🔥 VALIDASI STOK DULU
        foreach ($cart as $item) {
            $product = Product::find($item['id']);

            if (!$product) {
                return back()->with('error', 'Produk tidak ditemukan');
            }

            if ($product->stock < $item['qty']) {
                return back()->with('error', 'Stok tidak cukup untuk ' . $product->name);
            }
        }

        // 💰 HITUNG TOTAL
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        // 🧾 BUAT ORDER
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => $total,
            'status' => 'pending'
        ]);

        // 📦 SIMPAN ORDER ITEM + KURANGI STOK
        foreach ($cart as $item) {

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['qty'],
                'price' => $item['price']
            ]);

            // 🔥 KURANGI STOK
            $product = Product::find($item['id']);
            $product->stock -= $item['qty'];
            $product->save();
        }

        // 🧹 HAPUS CART
        session()->forget('cart');

        // ➡️ KE HALAMAN PAYMENT
        return redirect('/payment/' . $order->id);
    }
}