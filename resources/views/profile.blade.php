@extends('layouts.app')

@section('title', 'Profil Admin')

@section('content')
<main class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
    <h2 class="text-2xl font-semibold mb-2">Profil {{ $username }}</h2>
    <p class="text-gray-500 mb-6">Kelola informasi pribadi, lihat status akun, dan ubah kata sandi Anda.</p>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="flex flex-col items-center text-center bg-gray-50 p-4 rounded-lg">
            <img src="img/{{ $foto }}" alt="Profil" class="w-24 h-24 rounded-full mb-2">
            <h3 class="text-lg font-semibold text-gray-700">{{ $username }}</h3>
            <p class="text-sm text-gray-500">{{ $telepon }}</p>
        </div>


        <div class="md:col-span-2 bg-gray-50 p-4 rounded-lg">
            <h4 class="font-semibold mb-4 text-gray-700">Informasi Umum</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <input type="text" value="{{ $username }}" class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Nama Pengguna">
                <input type="text" value="{{ $alamat }}" class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Alamat">
            </div>
            <button class="border border-green-500 text-green-600 font-medium px-4 py-2 rounded hover:bg-green-50">Perbarui</button>
        </div>
    </div>


    <div class="mt-8 bg-gray-50 p-4 rounded-lg">
        <h4 class="font-semibold mb-4 text-gray-700">Keamanan</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <input type="email" value="{{ $email }}" class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Email">
            <input type="text" value="{{ $password }}" class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Kata Sandi">
            <input type="text" value="{{ $telepon }}" class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Nomor Telepon">
        </div>
        <div class="flex gap-4">
            <button class="border border-green-500 text-green-600 font-medium px-4 py-2 rounded hover:bg-green-50">Ubah Kata Sandi</button>
            <button class="border border-green-500 text-green-600 font-medium px-4 py-2 rounded hover:bg-green-50">Ubah Nomor Telepon</button>
        </div>
    </div>
</main>
@endsection
