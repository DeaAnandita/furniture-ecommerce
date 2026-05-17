@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto mb-10">

    <!-- HEADER -->
    <div class="mb-8">

        <p class="uppercase tracking-[3px] text-xs text-[#8B5E3C] mb-2">
            Our Collection
        </p>

        <h1 class="hero-title text-3xl md:text-5xl font-bold">
            Semua Produk Furniture
        </h1>

    </div>

    <form method="GET" action="/products" class="flex gap-3 mb-8">

    <!-- search -->
    <input type="text"
           name="search"
           value="{{ request('search') }}"
           placeholder="Search furniture..."
           class="border border-gray-300 rounded-xl px-4 py-3 w-full">

    <!-- sort -->
    <select name="sort"
            class="border border-gray-300 rounded-xl px-6 py-3">

        <option value="">Newest</option>

        <option value="low"
            {{ request('sort') == 'low' ? 'selected' : '' }}>
            Lowest Price
        </option>

        <option value="high"
            {{ request('sort') == 'high' ? 'selected' : '' }}>
            Highest Price
        </option>

    </select>

    <button class="bg-[#7D5548] text-white px-5 rounded-xl">
        Apply
    </button>

</form>

    <!-- GRID -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-4 md:gap-6">

        @foreach($products as $product)

        <div class="product-card bg-white rounded-[24px] overflow-hidden shadow-sm">

            <!-- IMAGE -->
            <div class="overflow-hidden">

                <img 
                    src="{{ asset('products/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-[170px] md:h-[220px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

            <!-- CONTENT -->
            <div class="p-4 md:p-5">

                <p class="text-[11px] md:text-xs text-[#C97B63] mb-2 uppercase tracking-[2px]">
                    {{ $product->category }}
                </p>

                <h3 class="text-base md:text-lg font-semibold mb-2 line-clamp-1">
                    {{ $product->name }}
                </h3>

                <p class="text-xs md:text-sm text-gray-500 mb-4 line-clamp-2">
                    {{ $product->description }}
                </p>

                <div class="mb-4">

                    <p class="text-lg md:text-xl font-bold text-[#8B5E3C]">
                        Rp {{ number_format($product->price) }}
                    </p>

                    <p class="text-xs text-gray-500">
                        Stock: {{ $product->stock }}
                    </p>

                </div>

                <div class="flex flex-col gap-2">

                    <a href="/product/{{ $product->id }}"
                       class="w-full border border-gray-300 py-2.5 rounded-xl text-center text-sm hover:bg-gray-100 transition">

                        Detail

                    </a>

                    <form action="/cart/add" method="POST">

                        @csrf

                        <input type="hidden"
                               name="product_id"
                               value="{{ $product->id }}">

                        <button type="submit"
                                class="w-full bg-[#8B5E3C] hover:bg-[#6F472D] text-white py-2.5 rounded-xl text-sm font-medium transition">

                            Add to Cart

                        </button>

                    </form>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection