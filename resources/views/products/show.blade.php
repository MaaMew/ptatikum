@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold text-center mb-6">{{ $product->name }}</h1>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nama Produk:</label>
                <p class="text-lg text-gray-800">{{ $product->name }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Harga:</label>
                <p class="text-lg text-gray-800">{{ number_format($product->price, 2, ',', '.') }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kategori:</label>
                <p class="text-lg text-gray-800">{{ $product->category->name }}</p>
            </div>

            <div class="text-center">
                <a href="{{ route('products.index') }}" class="px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-lg">Kembali ke Daftar Produk</a>
            </div>
        </div>
    </div>
@endsection
