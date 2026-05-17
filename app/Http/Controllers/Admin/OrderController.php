<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')
            ->where('status', 'paid') // hanya yang sudah bayar
            ->whereDate('created_at', today()) // hari ini
            ->latest()
            ->get();

        return view('admin.orders.index', compact('orders'));
    }
}
