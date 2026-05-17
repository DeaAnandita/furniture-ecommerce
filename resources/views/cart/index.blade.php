@extends('layouts.app')

@section('content')

<style>

    .cart-card{
        background: white;
        border-radius: 28px;
        border: 1px solid #E8DED1;
        transition: 0.3s ease;
    }

    .cart-card:hover{
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    }

    .qty-btn{
        width: 34px;
        height: 34px;
        border-radius: 12px;
        background: #F5EFE6;
        transition: 0.2s;
    }

    .qty-btn:hover{
        background: #E7D8C7;
    }

    .checkout-btn{
        background: #7D5548;
        transition: 0.3s;
    }

    .checkout-btn:hover{
        background: #68453A;
    }

</style>

<section class="max-w-7xl mx-auto pb-32 lg:pb-6">

    <!-- TITLE -->
    <div class="mb-8 md:mb-10">

        <p class="uppercase tracking-[4px] text-[11px] md:text-sm text-[#8B5E3C] mb-3">
            Shopping Cart
        </p>

        <h1 class="text-3xl md:text-5xl font-bold hero-title">
            Your Cart
        </h1>

    </div>

    @if($carts->count() == 0)

    <!-- EMPTY -->
    <div class="bg-white border border-[#E8DED1] rounded-[30px] p-10 text-center">

        <div class="text-5xl mb-4">
            🛒
        </div>

        <h2 class="text-2xl font-semibold mb-2">
            Cart is Empty
        </h2>

        <p class="text-gray-500 mb-6">
            Yuk tambahkan furniture favoritmu.
        </p>

        <a href="/"
           class="inline-block px-6 py-3 rounded-2xl text-white checkout-btn">

            Belanja Sekarang

        </a>

    </div>

    @else

    <div class="grid lg:grid-cols-3 gap-6">

        <!-- LEFT -->
        <div class="lg:col-span-2 space-y-5">

            @php
                $grandTotal = 0;
            @endphp

            @foreach($carts as $cart)

            @php
                $subtotal = $cart->product->price * $cart->quantity;
                $grandTotal += $subtotal;
            @endphp

            <div class="cart-card p-4 md:p-6">

                <div class="flex gap-4 md:gap-6">

                    <!-- IMAGE -->
                    <img src="{{ asset('products/' . $cart->product->image) }}"
                         class="w-28 h-28 md:w-36 md:h-36 rounded-2xl object-cover">

                    <!-- CONTENT -->
                    <div class="flex-1">

                        <p class="text-xs uppercase tracking-[2px] text-[#C97B63] mb-2">
                            {{ $cart->product->category }}
                        </p>

                        <h2 class="text-lg md:text-2xl font-semibold mb-2">
                            {{ $cart->product->name }}
                        </h2>

                        <p class="text-sm text-gray-500 line-clamp-2 mb-4">
                            {{ $cart->product->description }}
                        </p>

                        <!-- BOTTOM -->
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                            <!-- PRICE -->
                            <div>

                                <p class="text-xl font-bold text-[#8B5E3C]">
                                    Rp {{ number_format($cart->product->price) }}
                                </p>

                                <p class="text-sm text-gray-500">
                                    Subtotal:
                                    Rp {{ number_format($subtotal) }}
                                </p>

                            </div>

                            <!-- QTY -->
                            <div class="flex items-center gap-3">

                                <!-- MINUS -->
                                <form action="/cart/minus/{{ $cart->id }}"
                                      method="POST">

                                    @csrf

                                    <button class="qty-btn">
                                        −
                                    </button>

                                </form>

                                <span class="font-semibold text-lg w-6 text-center">
                                    {{ $cart->quantity }}
                                </span>

                                <!-- PLUS -->
                                <form action="/cart/plus/{{ $cart->id }}"
                                      method="POST">

                                    @csrf

                                    <button class="qty-btn">
                                        +
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        <!-- RIGHT -->
<div>

    <!-- DESKTOP -->
    <div class="hidden lg:block bg-white border border-[#E8DED1] rounded-[30px] p-6 sticky top-28">

        <h2 class="text-2xl font-semibold mb-6">
            Order Summary
        </h2>

        <div class="space-y-4 mb-6">

            <div class="flex justify-between text-sm">

                <span class="text-gray-500">
                    Total Item
                </span>

                <span>
                    {{ $carts->sum('quantity') }}
                </span>

            </div>

            <div class="flex justify-between text-sm">

                <span class="text-gray-500">
                    Shipping
                </span>

                <span>
                    Free
                </span>

            </div>

            <div class="border-t pt-4 flex justify-between text-lg font-bold">

                <span>
                    Total
                </span>

                <span class="text-[#8B5E3C]">
                    Rp {{ number_format($grandTotal) }}
                </span>

            </div>

        </div>

        <form action="/checkout"
              method="POST">

            @csrf

            <button class="checkout-btn w-full text-white py-4 rounded-2xl font-medium">

                Checkout Now

            </button>

        </form>

    </div>

</div>

<!-- MOBILE STICKY BOTTOM -->
<div class="lg:hidden fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-[#E8DED1] px-5 py-4 shadow-[0_-5px_20px_rgba(0,0,0,0.05)]">

    <div class="flex items-center justify-between mb-3">

        <div>

            <p class="text-xs text-gray-500">
                Total
            </p>

            <h3 class="text-xl font-bold text-[#8B5E3C]">
                Rp {{ number_format($grandTotal) }}
            </h3>

        </div>

        <div class="text-right">

            <p class="text-xs text-gray-500">
                Items
            </p>

            <p class="font-semibold">
                {{ $carts->sum('quantity') }}
            </p>

        </div>

    </div>

    <form action="/checkout"
          method="POST">

        @csrf

        <button class="checkout-btn w-full text-white py-3 rounded-2xl font-medium">

            Checkout Now

        </button>

    </form>

</div>

        </div>

    </div>

    @endif

</section>

@endsection