@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #F5EFE6;
        color: #2B2B2B;
    }

    .hero-title {
        font-family: 'Playfair Display', serif;
    }

    .product-container {
        background: white;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    }

    .product-image {
        overflow: hidden;
    }

    .product-image img {
        transition: 0.4s ease;
    }

    .product-image:hover img {
        transform: scale(1.05);
    }

    .primary-btn {
        background: #8B5E3C;
        color: white;
        transition: 0.3s ease;
    }

    .primary-btn:hover {
        background: #6F472D;
    }

    .secondary-btn {
        border: 1px solid #D9D9D9;
        transition: 0.3s ease;
    }

    .secondary-btn:hover {
        background: #f3f3f3;
    }

    .info-card {
        background: #FAF7F2;
        border-radius: 18px;
    }
</style>

<div class="max-w-7xl mx-auto mb-10 px-4 md:px-6">

    <!-- Breadcrumb -->
    <div class="mb-8 text-sm text-gray-500">

        <a href="/" class="hover:text-[#8B5E3C] transition">
            Home
        </a>

        /

        <span class="text-[#8B5E3C] font-medium">
            {{ $product->name }}
        </span>

    </div>

    <!-- PRODUCT -->
    <div class="product-container grid grid-cols-1 lg:grid-cols-2">

        <!-- IMAGE -->
        <div class="product-image bg-[#EFE7DC]">

            <img 
                src="{{ asset('products/' . $product->image) }}"
                alt="{{ $product->name }}"
                class="w-full h-full object-cover min-h-[550px]"
            >

        </div>

        <!-- CONTENT -->
        <div class="p-10 flex flex-col justify-center">

            <p class="uppercase tracking-[3px] text-sm text-[#C97B63] mb-3">
                {{ $product->category }}
            </p>

            <h1 class="hero-title text-5xl font-bold mb-5 leading-tight">
                {{ $product->name }}
            </h1>

            <p class="text-gray-600 leading-relaxed text-lg mb-8">
                {{ $product->description }}
            </p>

            <!-- PRICE -->
            <div class="mb-8">

                <p class="text-sm text-gray-500 mb-1">
                    Price
                </p>

                <h2 class="text-4xl font-bold text-[#8B5E3C]">
                    Rp {{ number_format($product->price) }}
                </h2>

            </div>

            <!-- INFO -->
            <div class="grid grid-cols-3 gap-4 mb-10">

                <div class="info-card p-4 text-center">

                    <p class="text-sm text-gray-500 mb-1">
                        Stock
                    </p>

                    <h3 class="font-semibold">
                        {{ $product->stock }}
                    </h3>

                </div>

                <div class="info-card p-4 text-center">

                    <p class="text-sm text-gray-500 mb-1">
                        Material
                    </p>

                    <h3 class="font-semibold">
                        {{ $product->material }}
                    </h3>

                </div>

                <div class="info-card p-4 text-center">

                    <p class="text-sm text-gray-500 mb-1">
                        Style
                    </p>

                    <h3 class="font-semibold">
                        {{ $product->style }}
                    </h3>

                </div>

            </div>

            <!-- BUTTON -->
            <div class="flex flex-col md:flex-row gap-4">

                <form action="/cart/add" method="POST" class="flex-1">

                    @csrf

                    <input type="hidden"
                           name="product_id"
                           value="{{ $product->id }}">

                    <button type="submit"
                            class="primary-btn w-full py-4 rounded-full text-lg font-medium">
                        Add to Cart
                    </button>

                </form>

                <a href="/"
                   class="secondary-btn flex items-center justify-center px-8 py-4 rounded-full text-lg">
                    Back
                </a>

            </div>

        </div>

    </div>

</div>

@endsection