<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    // HALAMAN PAYMENT
    public function index($id)
    {
        $order = Order::findOrFail($id);

        return view('payment.index', compact('order'));
    }

    // GENERATE SNAP TOKEN
    public function pay($id)
{
    try {

        $order = Order::findOrFail($id);

        // HARDCODE TEST
        Config::$serverKey = 'SB-Mid-server-7lqiMphTMKhri-5Tr3y5Mlp9';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [

            'transaction_details' => [

                'order_id' => 'ORDER-' . time(),

                'gross_amount' => (int) $order->total_price,

            ],

            'customer_details' => [

                'first_name' => auth()->user()->name,

                'email' => auth()->user()->email,

            ]

        ];

        $snapToken = Snap::getSnapToken($params);

        return response()->json([
            'snap_token' => $snapToken
        ]);

    } catch (\Exception $e) {

        return response()->json([
            'error' => $e->getMessage()
        ], 500);

    }
}
}