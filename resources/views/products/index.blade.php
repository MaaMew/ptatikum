@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center mb-6">Daftar Produk</h1>
        <a href="{{ route('products.create') }}" class="mb-4 inline-block px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-lg">Tambah Produk</a>
        
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse shadow-lg">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 bg-gray-100">Nama Produk</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 bg-gray-100">Harga</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 bg-gray-100">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $product->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ number_format($product->price, 2, ',', '.') }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $product->category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
