<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;  // Pastikan ada model Admin

class AdminController extends Controller
{
    // Method untuk menampilkan form tambah admin
    public function create()
    {
        return view('admin.create');  // Tampilkan form tambah admin
    }

    // Method untuk menyimpan data admin
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'required|numeric',
            'role' => 'required|in:super_admin,kasir',
        ]);

        // Menyimpan data admin
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan!');
    }

    // Method untuk menampilkan daftar admin
    public function index()
    {
        $admins = Admin::all();  // Ambil data admin
        return view('admin.index', compact('admins'));  // Kirim data ke view
    }
}
