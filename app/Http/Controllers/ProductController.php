<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Menampilkan form untuk menambahkan produk baru
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index');
    }

    // Menampilkan detail produk
public function show($id)
{
    // Cari produk berdasarkan ID
    $product = Product::findOrFail($id);
    return view('products.show', compact('product'));
}

}
