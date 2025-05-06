@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4">Hello, {{ $username }}</h2>

        <main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mt-8">
            @foreach ($buku as $item)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden relative group">
                <img src="{{ asset('img/' . $item['gambar']) }}" alt="{{ $item['judul'] }}" class="w-full h-64 object-contain bg-white p-2 transition-transform group-hover:scale-105">


                <div class="p-4">
                    <p class="text-sm text-gray-500">{{ $item['penulis'] }}</p>
                    <h3 class="text-md font-semibold text-gray-800 mt-1">{{ $item['judul'] }}</h3>
                    <div class="mt-2 flex items-center space-x-2">
                        <span class="text-base font-bold text-gray-900">Rp. {{ number_format($item['harga'], 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </main>
    </div>
@endsection
