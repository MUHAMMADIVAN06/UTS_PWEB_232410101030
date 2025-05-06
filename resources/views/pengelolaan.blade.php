@extends('layouts.app')

@section('title', 'Pengelolaan Buku')

@section('content')
<br>
<div class="flex justify-between items-center mb-4 px-6">
    <h2 class="text-2xl font-bold">Daftar Buku</h2>
    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">+ Tambah Buku</a>
</div>

<div class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($buku as $item)
    <div class="bg-white rounded-2xl shadow-md overflow-hidden relative">
        <img src="{{ asset('img/' . $item['gambar']) }}" alt="{{ $item['judul'] }}" class="w-full h-48 object-contain bg-white p-2">
        <div class="p-4">
            <p class="text-sm text-gray-500">{{ $item['penulis'] }}</p>
            <h3 class="text-md font-semibold text-gray-800">{{ $item['judul'] }}</h3>
            <p class="text-base font-bold text-gray-900 mt-2">Rp. {{ number_format($item['harga'], 0, ',', '.') }}</p>
        </div>
        <div class="absolute top-2 right-2 flex space-x-1">
            <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">Edit</a>
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Hapus</button>

        </div>
    </div>
    @endforeach
</div>
@endsection
