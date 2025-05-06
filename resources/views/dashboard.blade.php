@extends('layouts.app')
@section('content')
<div class="flex h-screen">
    <div class="w-64 bg-[#CEF9B3] shadow-md h-full">
        <div class="p-4">
            <h2 class="text-2xl font-bold text-gray-800 text-center">AgroEase</h2>
        </div>
        <ul class="p-4">
            <li class="mb-2">
                <a href="{{ route('dashboard', ['username' => $username]) }}" class="block px-4 py-2 text-[#156906] font-bold hover:bg-[#FFFBE6] hover:text-[#156906] rounded-lg {{ request()->routeIs('dashboard') ? 'bg-[#FFFBE6]' : '' }}">
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="{{ route('profile', ['username' => $username]) }}" class="block px-4 py-2 text-[#156906] font-bold hover:bg-[#FFFBE6] hover:text-[#156906] rounded-lg {{ request()->routeIs('profile') ? 'bg-[#FFFBE6]' : '' }}">
                    Profile
                </a>
            </li>
            <li class="mb-2">
                <a href="{{ route('pengelolaan') }}" class="block px-4 py-2 text-[#156906] font-bold hover:bg-[#FFFBE6] hover:text-[#156906] rounded-lg {{ request()->routeIs('pengelolaan') ? 'bg-[#FFFBE6]' : '' }}">
                    Pengelolaan
                </a>
            </li>
            <li class="mt-4">
                <a href="{{ route('logout') }}" class="block px-4 py-2 text-red-500 font-bold hover:bg-red-100 hover:text-red-700 rounded-lg">
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <div class="flex-1 bg-white shadow-md rounded px-8 pt-6 pb-8 mx-4 my-2 h-full">
        <h2 class="text-lg font-bold mb-4">Dashboard</h2>
        <p class="text-gray-700">Hai <span class="font-semibold">{{ $username }}</span>, selamat datang di website AgroEase!</p>
        <div class="mt-4 flex flex-row gap-4">
            <div class="bg-[#CEF9B3] p-4 rounded shadow-md w-56 h-52">
                <h3 class="text-lg font-bold mb-2 text-[#156906]">Total Kategori</h3>
                <p class="text-gray-700">Jumlah kategori AgroEase</p>
                <h4 class="text-8xl font-bold text-center mt-2 text-emerald-800">4</h4>
            </div>
            <div class="bg-[#CEF9B3] p-4 rounded shadow-md w-56 h-52">
                <h3 class="text-lg font-bold mb-2 text-[#156906]">Total Produk</h3>
                <p class="text-gray-700">Jumlah produk AgroEase</p>
                <h4 class="text-8xl font-bold text-center mt-2 text-emerald-800">15</h4>
            </div>
            <div class="bg-[#CEF9B3] p-4 rounded shadow-md w-56 h-52">
                <h3 class="text-lg font-bold mb-2 text-[#156906]">Total Penjualan</h3>
                <p class="text-gray-700">Penjualan AgroEase</p>
                <h4 class="text-8xl font-bold text-center mt-2 text-emerald-800">168</h4>
            </div>
            <div class="bg-[#CEF9B3] p-4 rounded shadow-md w-56 h-52">
                <h3 class="text-lg font-bold mb-2 text-[#156906]">Total Profit</h3>
                <p class="text-gray-700">Profit AgroEase</p>
                <h4 class="text-6xl font-bold text-center mt-5 text-emerald-800">1.500k</h4>
            </div>
        </div>
        <div class="bg-[#CEF9B3] px-4 py-1 rounded shadow-md mt-4 h-56">
            <h3 class="text-[#156906] mt-2 text-lg font-bold">Kategori Produk</h3>
            <div class="mt-4 flex flex-row gap-4 justify-center">
                <div class="bg-[#FFFBE6] px-2 py-1 rounded shadow-md w-48 h-36">
                    <h3 class="text-[#156906] text-base font-semibold mb-2 justify-center">Sayur</h3>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/sawi.png') }}" alt="Sayur" class="rounded w-auto h-20 shadow-md">
                    </div>
                </div>
                <div class="bg-[#FFFBE6] px-2 py-1 rounded shadow-md w-48 h-36">
                    <h3 class="text-[#156906]text-base font-semibold mb-2">Buah</h3>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/tomat.png') }}" alt="Buah" class="rounded w-auto h-20 shadow-md">
                    </div>
                </div>
                <div class="bg-[#FFFBE6] px-2 py-1 rounded shadow-md w-48 h-36">
                    <h3 class="text-[#156906] text-base font-semibold mb-2">Benih</h3>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/benih.jpeg') }}" alt="Benih" class="rounded w-auto h-20 shadow-md">
                    </div>
                </div>
                <div class="bg-[#FFFBE6] px-2 py-1 rounded shadow-md w-48 h-36">
                    <h3 class="text-[#156906] text-base font-semibold mb-2">Pupuk</h3>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/pupuk.jpg') }}" alt="pupuk" class="rounded w-auto h-20 shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
