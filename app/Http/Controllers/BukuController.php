<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    // Menampilkan form untuk membuat buku baru
    public function create()
    {
        return view('buku.create');
    }

    // Menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'harga' => 'required|integer',
            'stok' => 'required|integer'
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    // Menampilkan detail buku
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    // Menampilkan form untuk mengedit buku
    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    // Memperbarui data buku
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'harga' => 'required|integer',
            'stok' => 'required|integer'
        ]);

        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    // Menghapus buku
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
