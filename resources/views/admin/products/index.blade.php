@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Data Produk</h2>

<a href="/admin/products/create"
   class="bg-green-500 text-white px-3 py-2 rounded">
   + Tambah Produk
</a>

<table class="w-full mt-4 bg-white shadow rounded">
<tr>
    <th>Nama</th>
    <th>Harga</th>
    <th>Stok</th>
</tr>

@foreach($products as $product)
<tr class="text-center border-t">
    <td>{{ $product->name }}</td>
    <td>Rp {{ number_format($product->price) }}</td>
    <td>{{ $product->stock }}</td>
</tr>
@endforeach

</table>
@endsection