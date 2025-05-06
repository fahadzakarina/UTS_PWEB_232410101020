@extends('layouts.app')
@section('content')
<x-navbar></x-navbar>
<h2 class="text-xl text-[#156906] font-base mt-4 ml-2">Selamat datang, <span class="font-bold">{{ $username }}</span></h2>
<h1 class="text-2xl font-bold text-center mt-8">Profile</h1>
<div class="flex flex-row items-center mt-4 justify-center">
    <div class="bg-[#CEF9B3] p-4 rounded shadow-md w-64 h-64 flex flex-col justify-center items-center mx-4">
        <img src="{{ asset('images/profile_foto.png') }}" alt="Logo" class="w-42 rounded">
    </div>
    <div class="px-2 rounded w-auto h-64 flex flex-col ">
        <label class="text-lg font-bold text-[#156906]">Username :</label>
        <p class="text-gray-700 mb-2">{{ $username }}</p>
        <label class="text-lg font-bold text-[#156906]">Email :</label>
        <p class="text-gray-700 mb-2">emaildumy22@gmail.com</p>
        <label class="text-lg font-bold text-[#156906]">No. Telepon :</label>
        <p class="text-gray-700 mb-2">08123456789</p>
        <label class="text-lg font-bold text-[#156906]">Alamat :</label>
        <p class="text-gray-700 mb-2">Jl. Raya No. 123, Jakarta</p>
    </div>
    <div class="px-2 rounded w-auto h-64 flex flex-col ">
        <label class="text-lg font-bold text-[#156906]">Role :</label>
        <p class="text-gray-700 mb-2">Admin AgroEase</p>
        <label class="text-lg font-bold text-[#156906]">Jabatan</label>
        <p class="text-gray-700 mb-2">Admin Website</p>
        <label class="text-lg font-bold text-[#156906]">Tanggal Masuk :</label>
        <p class="text-gray-700 mb-2">22 Maret 2022</p>
        <label class="text-lg font-bold text-[#156906]">Alamat :</label>
        <p class="text-gray-700 mb-2">Jl. Raya No. 123, Jakarta</p>
    </div>
</div>
@endsection
