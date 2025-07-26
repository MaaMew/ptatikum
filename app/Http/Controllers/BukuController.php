<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Ambil semua data buku
    public function index()
    {
        $bukus = Buku::all();
        return response()->json($bukus);
    }

    // Ambil satu data buku berdasarkan ID
    public function show($id)
    {
        $buku = Buku::find($id);
        if ($buku) {
            return response()->json($buku);
        } else {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }
    }

    // Tambah data buku baru
public function store(Request $request)
{
    $validated = $request->validate([
        'judul' => 'required|string',
        'pengarang' => 'required|string',
        'penerbit' => 'required|string',
        'tahun_terbit' => 'required|integer|before_or_equal:' . date('Y'),
        'kategori' => 'required|in:Fiksi,Non-Fiksi,Referensi',
    ]);

    // Jika validasi berhasil, simpan buku baru
    $buku = Buku::create($validated);

    return response()->json($buku, 201);
}


    // Update data buku
    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'judul' => 'required|string',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|before_or_equal:' . date('Y'),
            'kategori' => 'required|in:Fiksi,Non-Fiksi,Referensi',
        ]);

        $buku->update($validated);

        return response()->json($buku);
    }

    // Hapus data buku
    public function destroy($id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }

        $buku->delete();

        return response()->json(['message' => 'Buku berhasil dihapus']);
    }
}
