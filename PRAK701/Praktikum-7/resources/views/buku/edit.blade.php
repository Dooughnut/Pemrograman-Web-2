@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto w-full">
    <div class="mb-6">
        <a href="{{ route('buku.index') }}" class="text-indigo-600 hover:text-indigo-900 flex items-center font-medium">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali
        </a>
    </div>

    <div class="bg-white py-8 px-6 shadow-xl rounded-xl border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Edit Data Buku</h2>

        <form action="{{ route('buku.update', $buku->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul Buku</label>
                <div class="mt-1">
                    <input type="text" name="judul" id="judul" value="{{ old('judul', $buku->judul) }}" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                @error('judul')
                    <p class="mt-1 text-sm text-red-600 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="penulis" class="block text-sm font-medium text-gray-700">Nama Penulis</label>
                <div class="mt-1">
                    <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $buku->penulis) }}" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                @error('penulis')
                    <p class="mt-1 text-sm text-red-600 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="penerbit" class="block text-sm font-medium text-gray-700">Nama Penerbit</label>
                <div class="mt-1">
                    <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                @error('penerbit')
                    <p class="mt-1 text-sm text-red-600 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tahun_terbit" class="block text-sm font-medium text-gray-700">Tahun Terbit</label>
                <div class="mt-1">
                    <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" required min="1801" max="2023"
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p class="mt-1 text-xs text-gray-500">Harus lebih besar dari 1800 dan lebih kecil dari 2024.</p>
                </div>
                @error('tahun_terbit')
                    <p class="mt-1 text-sm text-red-600 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">
                    Perbarui Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
