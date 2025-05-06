@extends('layouts.app')
@section('content')
<x-navbar></x-navbar>
<div class="bg-amber-100 flex flex-col rounded-lg shadow-lg h-[440px] mx-4 mt-5">
    <h1 class="text-lg font-bold text-center mt-5">Pengelolaan</h1>
    <div class="grid grid-cols-4 gap-4 mx-4">
        @foreach ($data_produk as $item)
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mt-6">
                <h3 class="text-lg font-semibold mb-2">{{ $item['nama'] }}</h3>
                <p class="text-gray-700">Harga: {{ $item['harga'] }}</p>
                <p class="text-gray-700">Stok: {{ $item['stok'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
