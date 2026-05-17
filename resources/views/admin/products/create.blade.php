@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="bg-white rounded-3xl shadow-sm p-8">

        <h2 class="text-3xl font-bold mb-8">
            Tambah Produk
        </h2>

        <form action="/admin/products" 
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <!-- Nama -->
            <div class="mb-5">
                <label class="block mb-2 font-medium">
                    Nama Produk
                </label>

                <input type="text"
                       name="name"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 outline-none focus:border-[#8B5E3C]">
            </div>

            <!-- Deskripsi -->
            <div class="mb-5">
                <label class="block mb-2 font-medium">
                    Deskripsi
                </label>

                <textarea name="description"
                          rows="4"
                          class="w-full border border-gray-300 rounded-2xl px-4 py-3 outline-none focus:border-[#8B5E3C]"></textarea>
            </div>

            <!-- Harga -->
            <div class="mb-5">
                <label class="block mb-2 font-medium">
                    Harga
                </label>

                <input type="number"
                       name="price"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 outline-none focus:border-[#8B5E3C]">
            </div>

            <!-- Stock -->
            <div class="mb-5">
                <label class="block mb-2 font-medium">
                    Stock
                </label>

                <input type="number"
                       name="stock"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 outline-none focus:border-[#8B5E3C]">
            </div>

            <!-- Category -->
            <div class="mb-5">
                <label class="block mb-2 font-medium">
                    Category
                </label>

                <input type="text"
                       name="category"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 outline-none focus:border-[#8B5E3C]">
            </div>

            <!-- Material -->
            <div class="mb-5">
                <label class="block mb-2 font-medium">
                    Material
                </label>

                <input type="text"
                       name="material"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 outline-none focus:border-[#8B5E3C]">
            </div>

            <!-- Style -->
            <div class="mb-5">
                <label class="block mb-2 font-medium">
                    Style
                </label>

                <input type="text"
                       name="style"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 outline-none focus:border-[#8B5E3C]">
            </div>

            <!-- Image -->
            <div class="mb-8">
                <label class="block mb-2 font-medium">
                    Gambar Produk
                </label>

                <input type="file"
                       name="image"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3">
            </div>

            <!-- Button -->
            <button type="submit"
                    class="bg-[#8B5E3C] hover:bg-[#6F472D] transition text-white px-8 py-4 rounded-full font-medium">
                Simpan Produk
            </button>

        </form>

    </div>

</div>

@endsection