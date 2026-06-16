<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|gt:1800|lt:2024',
        ], [
            'judul.required' => 'Judul buku wajib diisi.',
            'judul.string' => 'Judul buku harus berupa teks.',
            'penulis.required' => 'Nama penulis wajib diisi.',
            'penulis.string' => 'Nama penulis harus berupa teks.',
            'penerbit.required' => 'Nama penerbit wajib diisi.',
            'penerbit.string' => 'Nama penerbit harus berupa teks.',
            'tahun_terbit.required' => 'Tahun terbit wajib diisi.',
            'tahun_terbit.numeric' => 'Tahun terbit harus berupa angka.',
            'tahun_terbit.gt' => 'Tahun terbit harus lebih dari tahun 1800.',
            'tahun_terbit.lt' => 'Tahun terbit harus kurang dari tahun 2024.',
        ]);

        Buku::create($validated);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan!');
    }

    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|gt:1800|lt:2024',
        ], [
            'judul.required' => 'Judul buku wajib diisi.',
            'judul.string' => 'Judul buku harus berupa teks.',
            'penulis.required' => 'Nama penulis wajib diisi.',
            'penulis.string' => 'Nama penulis harus berupa teks.',
            'penerbit.required' => 'Nama penerbit wajib diisi.',
            'penerbit.string' => 'Nama penerbit harus berupa teks.',
            'tahun_terbit.required' => 'Tahun terbit wajib diisi.',
            'tahun_terbit.numeric' => 'Tahun terbit harus berupa angka.',
            'tahun_terbit.gt' => 'Tahun terbit harus lebih dari tahun 1800.',
            'tahun_terbit.lt' => 'Tahun terbit harus kurang dari tahun 2024.',
        ]);

        $buku->update($validated);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui!');
    }

    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus!');
    }
}
