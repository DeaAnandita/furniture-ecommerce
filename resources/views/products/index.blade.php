@extends('layouts.app')

@section('content')

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
      rel="stylesheet">

<style>

    body{
        font-family: 'Poppins', sans-serif;
        background-color: #F5EFE6;
        color: #2B2B2B;
    }

    .product-card{
        border-radius: 24px;
        background: white;
        overflow: hidden;
        transition: 0.3s ease;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }

    .product-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(0,0,0,0.12);
    }

    .product-image{
        overflow: hidden;
    }

    .product-image img{
        transition: 0.4s ease;
    }

    .product-card:hover .product-image img{
        transform: scale(1.05);
    }

    .primary-btn{
        background: #7D5548;
        color: white;
        transition: 0.3s;
    }

    .primary-btn:hover{
        background: #7D5548;
    }

    .hide-scrollbar::-webkit-scrollbar{
        display: none;
    }

    .hide-scrollbar{
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    html{
        scroll-behavior: smooth;
    }

    .add-to-cart-btn{
        transition: 0.25s ease;
    }

    .add-to-cart-btn:active{
        transform: scale(0.95);
    }

</style>

<!-- HERO -->
<section class="relative rounded-[24px] md:rounded-[32px] overflow-hidden mb-10 md:mb-10">

    <img 
        src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1600&auto=format&fit=crop"
        class="w-full h-[350px] md:h-[550px] object-cover"
    >

    <div class="absolute inset-0 bg-black/35 flex items-center">

        <div class="max-w-2xl px-5 md:px-12 text-white">

            <p class="uppercase tracking-[3px] text-xs md:text-sm mb-3 md:mb-4">
                Modern Minimalist Furniture
            </p>

            <h1 class="hero-title text-3xl md:text-6xl font-bold leading-tight mb-4 md:mb-6">
                Make Your Home More Comfortable
            </h1>

            <p class="text-sm md:text-lg text-gray-200 mb-6 md:mb-8">
                Discover aesthetic furniture collections inspired by Scandinavian and Japandi interiors.
            </p>

            <a href="#products"
               class="primary-btn px-6 md:px-8 py-3 md:py-4 rounded-full inline-block text-sm md:text-base font-medium">
                Shop Now
            </a>

        </div>

    </div>

</section>

<!-- FEATURES -->
<section class="mb-8 md:mb-10">

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">

        <!-- ITEM -->
        <div class="bg-white rounded-[24px] p-5 md:p-7 border border-[#E8DED1] hover:-translate-y-1 transition duration-300">

            <div class="w-11 h-11 md:w-14 md:h-14 rounded-full border border-[#D8C6B2] flex items-center justify-center mb-4">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="w-5 h-5 md:w-6 md:h-6 text-[#8B5E3C]">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M12 6v6h4.5m6.75 0A9.75 9.75 0 1 1 3 12a9.75 9.75 0 0 1 19.5 0Z" />

                </svg>

            </div>

            <h3 class="text-sm md:text-lg font-semibold mb-2">
                Pengiriman Cepat
            </h3>

            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">
                Pengiriman aman dan cepat ke seluruh Indonesia.
            </p>

        </div>

        <!-- ITEM -->
        <div class="bg-white rounded-[24px] p-5 md:p-7 border border-[#E8DED1] hover:-translate-y-1 transition duration-300">

            <div class="w-11 h-11 md:w-14 md:h-14 rounded-full border border-[#D8C6B2] flex items-center justify-center mb-4">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="w-5 h-5 md:w-6 md:h-6 text-[#8B5E3C]">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M2.25 8.25h19.5M6 15.75h.008v.008H6v-.008Zm3 0h.008v.008H9v-.008Zm3 0h.008v.008H12v-.008Zm3 0h.008v.008H15v-.008Zm3 0h.008v.008H18v-.008ZM3.75 5.25h16.5A1.5 1.5 0 0 1 21.75 6.75v10.5a1.5 1.5 0 0 1-1.5 1.5H3.75a1.5 1.5 0 0 1-1.5-1.5V6.75a1.5 1.5 0 0 1 1.5-1.5Z" />

                </svg>

            </div>

            <h3 class="text-sm md:text-lg font-semibold mb-2">
                Pembayaran Mudah
            </h3>

            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">
                Mendukung transfer bank dan pembayaran digital.
            </p>

        </div>

        <!-- ITEM -->
        <div class="bg-white rounded-[24px] p-5 md:p-7 border border-[#E8DED1] hover:-translate-y-1 transition duration-300">

            <div class="w-11 h-11 md:w-14 md:h-14 rounded-full border border-[#D8C6B2] flex items-center justify-center mb-4">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="w-5 h-5 md:w-6 md:h-6 text-[#8B5E3C]">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8.625 9.75a3.375 3.375 0 1 1 6.75 0c0 1.12-.554 2.11-1.403 2.72-.596.427-.972 1.073-.972 1.807v.223m-3.75 0h3.75m-8.25 3.75h12a2.25 2.25 0 0 0 2.25-2.25V7.5A2.25 2.25 0 0 0 16.5 5.25h-9A2.25 2.25 0 0 0 5.25 7.5v8.25A2.25 2.25 0 0 0 7.5 18Z" />

                </svg>

            </div>

            <h3 class="text-sm md:text-lg font-semibold mb-2">
                Online Support
            </h3>

            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">
                Tim kami siap membantu kebutuhan furniture Anda.
            </p>

        </div>

        <!-- ITEM -->
        <div class="bg-white rounded-[24px] p-5 md:p-7 border border-[#E8DED1] hover:-translate-y-1 transition duration-300">

            <div class="w-11 h-11 md:w-14 md:h-14 rounded-full border border-[#D8C6B2] flex items-center justify-center mb-4">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="w-5 h-5 md:w-6 md:h-6 text-[#8B5E3C]">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M9 14.25 4.5 9.75m0 0L9 5.25m-4.5 4.5h9a6 6 0 0 1 0 12h-3" />

                </svg>

            </div>

            <h3 class="text-sm md:text-lg font-semibold mb-2">
                Regular Sale
            </h3>

            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">
                Nikmati promo eksklusif setiap minggu dan bulannya.
            </p>

        </div>

    </div>

</section>

<!-- SEARCH -->
{{-- <form method="GET" action="/" class="mb-8 md:mb-10">

    <div class="bg-white rounded-[20px] md:rounded-[24px] shadow-sm p-2 md:p-3 flex items-center gap-2 md:gap-3 border border-[#EFE7DC]">

        <!-- ICON -->
        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#F5EFE6] flex items-center justify-center shrink-0">

            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.8"
                 stroke="currentColor"
                 class="w-5 h-5 text-[#8B5E3C]">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m21 21-4.35-4.35m0 0A7.95 7.95 0 1 0 5.4 5.4a7.95 7.95 0 0 0 11.25 11.25Z" />

            </svg>

        </div>

        <!-- INPUT -->
        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Search furniture..."
               class="w-full border border-[#ffffff] bg-transparent text-sm md:text-base text-[#2B2B2B] placeholder:text-gray-400 px-2 rounded-[20px] md:rounded-[10px]">

        <!-- BUTTON -->
        <button type="submit"
                class="primary-btn px-4 md:px-7 py-3 rounded-2xl text-sm md:text-base font-medium shrink-0">

            Search

        </button>

    </div>

</form> --}}

<!-- CATEGORY -->
<section class="mb-8 md:mb-10">
        <div class="flex items-center justify-between mb-6 md:mb-8">

        <div>

            <p class="text-[#8B5E3C] uppercase tracking-[3px] text-[11px] md:text-xs mb-2">
                Catergory
            </p>

            <h2 class="hero-title text-2xl md:text-4xl font-bold">
                Explore by Category
            </h2>

        </div>

    </div>

    <div class="flex gap-4 overflow-x-auto hide-scrollbar pb-2">

        <!-- ALL -->
        <a href="/"
           class="shrink-0 rounded-2xl md:rounded-3xl px-5 md:px-6 py-4 shadow-sm flex items-center gap-3 transition
           {{ request('category') == null
                ? 'bg-[#7D5548] text-white'
                : 'bg-white text-[#2B2B2B] hover:bg-[#7D5548] hover:text-white' }}">

            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.7"
                 stroke="currentColor"
                 class="w-5 h-5">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M3.75 3.75h6v6h-6v-6Zm0 10.5h6v6h-6v-6Zm10.5-10.5h6v6h-6v-6Zm0 10.5h6v6h-6v-6Z" />

            </svg>

            <span class="font-medium text-sm md:text-base">
                All
            </span>

        </a>

        @foreach($categories as $category)

        <a href="/?category={{ $category }}"
           class="shrink-0 rounded-2xl md:rounded-3xl px-5 md:px-6 py-4 shadow-sm flex items-center gap-3 transition
           {{ request('category') == $category
                ? 'bg-[#8B5E3C] text-white'
                : 'bg-white text-[#2B2B2B] hover:bg-[#8B5E3C] hover:text-white' }}">

            <div class="text-lg">

                @if($category == 'Sofa')

                    🛋️

                @elseif($category == 'Chair')

                    🪑

                @elseif($category == 'Table')

                    🪵

                @elseif($category == 'Bedroom')

                    🛏️

                @elseif($category == 'Decoration')

                    🏺

                @else

                    📦

                @endif

            </div>

            <span class="font-medium text-sm md:text-base whitespace-nowrap">
                {{ $category }}
            </span>

        </a>

        @endforeach

    </div>

</section>

{{-- FEATURED COLLECTION --}}
<section class="mb-8 md:mb-10 overflow-hidden">

    <div class="flex items-center justify-between mb-6 md:mb-8">

        <div>

            <p class="text-[#8B5E3C] uppercase tracking-[3px] text-[11px] md:text-xs mb-2">
                Collection
            </p>

            <h2 class="hero-title text-2xl md:text-4xl font-bold">
                Featured Collection
            </h2>

        </div>

    </div>

    <!-- MOBILE SCROLL / DESKTOP GRID -->
    <div class="flex md:grid md:grid-cols-3 gap-4 md:gap-6 overflow-x-auto md:overflow-visible hide-scrollbar pb-2">

        <!-- ITEM -->
        <div class="relative rounded-[28px] overflow-hidden h-[200px] md:h-[400px]
                    min-w-[260px] md:min-w-0 group flex-shrink-0">

            <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=1200&auto=format&fit=crop"
                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

            <div class="absolute inset-0 bg-black/30"></div>

            <div class="absolute bottom-0 p-5 md:p-8 text-white">

                <p class="uppercase tracking-[3px] text-[10px] md:text-xs mb-2">
                    Living Room
                </p>

                <h3 class="text-xl md:text-3xl font-semibold">
                    Scandinavian Sofa
                </h3>

            </div>

        </div>

        <!-- ITEM -->
        <div class="relative rounded-[28px] overflow-hidden h-[200px] md:h-[400px]
                    min-w-[260px] md:min-w-0 group flex-shrink-0">

            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1200&auto=format&fit=crop"
                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

            <div class="absolute inset-0 bg-black/30"></div>

            <div class="absolute bottom-0 p-5 md:p-8 text-white">

                <p class="uppercase tracking-[3px] text-[10px] md:text-xs mb-2">
                    Bedroom
                </p>

                <h3 class="text-xl md:text-3xl font-semibold">
                    Elegant Bedroom
                </h3>

            </div>

        </div>

        <!-- ITEM -->
        <div class="relative rounded-[28px] overflow-hidden h-[200px] md:h-[400px]
                    min-w-[260px] md:min-w-0 group flex-shrink-0">

            <img src="https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?q=80&w=1200&auto=format&fit=crop"
                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

            <div class="absolute inset-0 bg-black/30"></div>

            <div class="absolute bottom-0 p-5 md:p-8 text-white">

                <p class="uppercase tracking-[3px] text-[10px] md:text-xs mb-2">
                    Decoration
                </p>

                <h3 class="text-xl md:text-3xl font-semibold">
                    Minimal Decor
                </h3>

            </div>

        </div>

    </div>

</section>

<!-- PRODUCT -->
<section id="products" class="mb-8 md:mb-10">

    <div class="flex items-center justify-between mb-6 md:mb-8">

        <div>

            <p class="text-[#8B5E3C] uppercase tracking-[3px] text-[11px] md:text-xs mb-2">
                Products
            </p>

            <h2 class="hero-title text-2xl md:text-4xl font-bold">
                Featured Products
            </h2>

        </div>

    </div>

    <!-- RESPONSIVE GRID -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-4 md:gap-6">

        @foreach($products->take(8) as $product)

        <div class="product-card">

            <!-- IMAGE -->
            <div class="product-image">

                <img 
                    src="{{ asset('products/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-[170px] md:h-[220px] object-cover"
                >

            </div>

            <!-- CONTENT -->
            <div class="p-4 md:p-5">

                <!-- CATEGORY -->
                <p class="text-[11px] md:text-xs text-[#C97B63] mb-2 uppercase tracking-[2px] truncate">
                    {{ $product->category }}
                </p>

                <!-- NAME -->
                <h3 class="text-base md:text-lg font-semibold mb-2 line-clamp-1">
                    {{ $product->name }}
                </h3>

                <!-- DESC -->
                <p class="text-xs md:text-sm text-gray-500 mb-4 line-clamp-2">
                    {{ $product->description }}
                </p>

                <!-- PRICE -->
                <div class="mb-4">

                    <p class="text-lg md:text-xl font-bold text-[#8B5E3C]">
                        Rp {{ number_format($product->price) }}
                    </p>

                    <p class="text-xs md:text-sm text-gray-500">
                        Stock: {{ $product->stock }}
                    </p>

                </div>

                <!-- BUTTON -->
                <div class="flex flex-col gap-2">

                    <a href="/product/{{ $product->id }}"
                       class="w-full border border-gray-300 py-2.5 rounded-xl text-center text-sm hover:bg-gray-100 transition">

                        Detail

                    </a>

                    <form action="/cart/add"
                          method="POST">

                        @csrf

                        <input type="hidden"
                               name="product_id"
                               value="{{ $product->id }}">

                        <button type="submit"
                                class="primary-btn add-to-cart-btn w-full py-2.5 rounded-xl text-sm font-medium transition-all duration-300 active:scale-95">

                            Add to Cart

                        </button>

                    </form>

                </div>

            </div>

                 </div>

        @endforeach

    </div>

    <!-- BUTTON LIHAT SEMUA -->
    <div class="flex justify-center mt-8 md:mt-10">

        <a href="/products"
        class="primary-btn px-6 md:px-8 py-3 rounded-full text-sm md:text-base font-medium shadow-sm">

            Lihat Semua Produk

        </a>

    </div>

</section>


<!-- INSTAGRAM -->
    <section id="instagram" class="mb-16 md:mb-24 mt-10 md:mt-16 bg-[#EADFD3] rounded-[40px] px-5 md:px-10 py-10 md:py-14">

    <!-- SEPARATOR -->
    <div class="flex items-center gap-4 mb-10 md:mb-14">

        <div class="h-px bg-[#D9C7B8] w-full"></div>

        <p class="uppercase tracking-[4px] text-[11px] md:text-sm text-[#8B5E3C] whitespace-nowrap">
            Social Media
        </p>

        <div class="h-px bg-[#D9C7B8] w-full"></div>

    </div>

    <div class="text-center mb-8 md:mb-10">

        <h2 class="hero-title text-3xl md:text-5xl font-bold mb-3">
            Follow Our Instagram
        </h2>

        <a href="https://instagram.com/tokofurniture"
           target="_blank"
           class="inline-flex items-center gap-2 text-[#8B5E3C] hover:text-[#6F472D] transition font-medium text-sm md:text-base">

            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="currentColor"
                 viewBox="0 0 24 24"
                 class="w-5 h-5">

                <path d="M7.75 2C4.574 2 2 4.574 2 7.75v8.5C2 19.426 4.574 22 7.75 22h8.5C19.426 22 22 19.426 22 16.25v-8.5C22 4.574 19.426 2 16.25 2h-8.5Zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5Zm9.25 1a1 1 0 1 0 1 1 1 1 0 0 0-1-1ZM12 6.5A5.5 5.5 0 1 0 17.5 12 5.506 5.506 0 0 0 12 6.5Zm0 1.5A4 4 0 1 1 8 12a4.005 4.005 0 0 1 4-4Z"/>

            </svg>

            @tokofurniture

        </a>

    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-5">

        <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=800&auto=format&fit=crop"
             class="rounded-[22px] md:rounded-[30px] h-[150px] md:h-[260px] w-full object-cover hover:scale-[1.02] transition duration-300">

        <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=800&auto=format&fit=crop"
             class="rounded-[22px] md:rounded-[30px] h-[150px] md:h-[260px] w-full object-cover hover:scale-[1.02] transition duration-300">

        <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?q=80&w=800&auto=format&fit=crop"
             class="rounded-[22px] md:rounded-[30px] h-[150px] md:h-[260px] w-full object-cover hover:scale-[1.02] transition duration-300">

        <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=800&auto=format&fit=crop"
             class="rounded-[22px] md:rounded-[30px] h-[150px] md:h-[260px] w-full object-cover hover:scale-[1.02] transition duration-300">

    </div>

</section>



<!-- FAQ -->
<section id="faq" class="mb-10 md:mb-10 mt-6 md:mt-10">

    <!-- SEPARATOR -->
    <div class="flex items-center gap-4 mb-10 md:mb-14">

        <div class="h-px bg-[#D9C7B8] w-full"></div>

        <p class="uppercase tracking-[4px] text-[11px] md:text-sm text-[#8B5E3C] whitespace-nowrap">
            FAQ
        </p>

        <div class="h-px bg-[#D9C7B8] w-full"></div>

    </div>

    <div class="text-center mb-10">

        <h2 class="hero-title text-3xl md:text-5xl font-bold mb-3">
            Frequently Asked Questions
        </h2>

        <p class="text-gray-500 text-sm md:text-base">
            Pertanyaan yang sering ditanyakan pelanggan.
        </p>

    </div>

    <div class="space-y-5 max-w-4xl mx-auto">

        <!-- ITEM -->
        <div class="bg-white border border-[#E8DED1] rounded-[28px] p-6 md:p-7 shadow-sm hover:shadow-md transition">

            <div class="flex items-start gap-4">

                <div class="w-11 h-11 rounded-full bg-[#F5EFE6] flex items-center justify-center shrink-0">

                    <span class="text-[#8B5E3C] text-lg">
                        ?
                    </span>

                </div>

                <div>

                    <h3 class="font-semibold text-lg mb-2">
                        Apakah bisa custom furniture?
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed">
                        Ya, kami menerima custom desain sesuai kebutuhan dan ukuran ruangan Anda.
                    </p>

                </div>

            </div>

        </div>

        <!-- ITEM -->
        <div class="bg-white border border-[#E8DED1] rounded-[28px] p-6 md:p-7 shadow-sm hover:shadow-md transition">

            <div class="flex items-start gap-4">

                <div class="w-11 h-11 rounded-full bg-[#F5EFE6] flex items-center justify-center shrink-0">

                    <span class="text-[#8B5E3C] text-lg">
                        ?
                    </span>

                </div>

                <div>

                    <h3 class="font-semibold text-lg mb-2">
                        Berapa lama pengiriman?
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed">
                        Estimasi pengiriman sekitar 2–7 hari tergantung lokasi pengiriman.
                    </p>

                </div>

            </div>

        </div>

        <!-- ITEM -->
        <div class="bg-white border border-[#E8DED1] rounded-[28px] p-6 md:p-7 shadow-sm hover:shadow-md transition">

            <div class="flex items-start gap-4">

                <div class="w-11 h-11 rounded-full bg-[#F5EFE6] flex items-center justify-center shrink-0">

                    <span class="text-[#8B5E3C] text-lg">
                        ?
                    </span>

                </div>

                <div>

                    <h3 class="font-semibold text-lg mb-2">
                        Apakah ada garansi?
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed">
                        Tersedia garansi produk untuk kerusakan tertentu sesuai syarat dan ketentuan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- FOOTER -->
<footer class="bg-[#5D4037] text-white rounded-t-[40px] ">

    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid md:grid-cols-3 gap-10">

            <div>
                <h3 class="text-2xl font-semibold mb-4 ml-4">
                    Toko Furniture
                </h3>

                <p class="text-gray-200 text-sm ml-4">
                    Furniture aesthetic modern dengan kualitas premium untuk rumah impian Anda.
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-4 ml-4">
                    Contact
                </h4>

                <div class="space-y-2 text-gray-200 text-sm ml-4">
                    <p>Email: tokofurniture@gmail.com</p>
                    <p>WhatsApp: 0812-3456-7890</p>
                    <p>Jepara, Indonesia</p>
                </div>
            </div>

            <div>
                <h4 class="font-semibold mb-4 ml-4">
                    Social Media
                </h4>

                <div class="space-y-2 text-gray-200 text-sm ml-4">
                    <p>Instagram</p>
                    <p>TikTok</p>
                    <p>Facebook</p>
                </div>
            </div>

        </div>

        <div class="border-t border-white/10 mt-10 pt-6 text-center text-sm text-white-500">
            © 2026 Toko Furniture. All rights reserved.
        </div>

    </div>

</footer>

<script>

document.querySelectorAll('form[action="/cart/add"]').forEach(form => {

    form.addEventListener('submit', async function(e){

        e.preventDefault();

        const button = form.querySelector('.add-to-cart-btn');

        // loading animation
        button.disabled = true;

        button.innerHTML = `
            <span class="flex items-center justify-center gap-2">

                <svg class="w-4 h-4 animate-bounce"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 4h1.5L7 14h10l1.5-7H6" />

                </svg>

                Added ✓

            </span>
        `;

        button.classList.add('scale-95');

        // kirim data tanpa reload
        await fetch('/cart/add', {

            method: 'POST',

            body: new FormData(form),

            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }

        });

        // update badge cart
        let badge = document.querySelector('.cart-badge');

        if(badge){

            let current = parseInt(badge.innerText);

            badge.innerText = current + 1;

            badge.classList.add('animate-bounce');

            setTimeout(() => {
                badge.classList.remove('animate-bounce');
            }, 500);
        }

        // kembali normal
        setTimeout(() => {

            button.innerHTML = 'Add to Cart';

            button.disabled = false;

            button.classList.remove('scale-95');

        }, 1200);

    });

});

</script>
@endsection
