<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $data_produk = [
            ['nama' => 'Produk A', 'harga' => 10000, 'stok' => 50],
            ['nama' => 'Produk B', 'harga' => 20000, 'stok' => 30],
            ['nama' => 'Produk C', 'harga' => 15000, 'stok' => 20],
            ['nama' => 'Produk D', 'harga' => 25000, 'stok' => 10],
            ['nama' => 'Produk E', 'harga' => 30000, 'stok' => 5],
            ['nama' => 'Produk F', 'harga' => 12000, 'stok' => 40],
            ['nama' => 'Produk G', 'harga' => 18000, 'stok' => 25],
            ['nama' => 'Produk H', 'harga' => 22000, 'stok' => 15],
        ];
        return view('pengelolaan', compact('data_produk'));
    }

    public function logout(Request $request)
    {
        return view('login');
    }
}
