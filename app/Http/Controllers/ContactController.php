<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string|max:500',
        ]);

        // Simpan pesan kontak (misalnya ke database atau email)

        return redirect()->route('contact.create')->with('success', 'Pesan Anda telah terkirim!');
    }
}
