@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold">Halaman Pembayaran</h2>

<p>Total: Rp {{ number_format($order->total_price) }}</p>

<button class="bg-blue-500 text-white px-4 py-2 mt-3">
    Bayar Sekarang
</button>
@endsection