<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $stats = [
            ['label' => 'Total Produk',   'value' => 128,   'icon' => 'bi-box-seam',       'color' => 'primary'],
            ['label' => 'Transaksi Hari Ini', 'value' => 34, 'icon' => 'bi-cart-check',    'color' => 'success'],
            ['label' => 'Pelanggan',       'value' => 512,   'icon' => 'bi-people-fill',    'color' => 'warning'],
            ['label' => 'Pendapatan',      'value' => 'Rp 4.2jt', 'icon' => 'bi-cash-coin','color' => 'danger'],
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $produk = [
            ['id' => 1, 'nama' => 'Knalpot Arm Luster V2',    'kategori' => 'Knalpot',   'stok' => 12, 'harga' => 'Rp 2.100.000', 'gambar' => 'knalpot.jpg'],
            ['id' => 2, 'nama' => 'Velg VND Sixstar V2 R14',  'kategori' => 'Velg',      'stok' => 8,  'harga' => 'Rp 1.700.000', 'gambar' => 'velg.jpg'],
            ['id' => 3, 'nama' => 'Swing Arm CNC Shijiro',        'kategori' => 'Rangka',    'stok' => 15, 'harga' => 'Rp 700.000',   'gambar' => 'swingarm.jpg'],
            ['id' => 4, 'nama' => 'Kaliper Nissin Samurai',   'kategori' => 'Rem',       'stok' => 20, 'harga' => 'Rp 800.000',   'gambar' => 'kaliper.jpg'],
            ['id' => 5, 'nama' => 'Master Rem RCB S1',        'kategori' => 'Rem',       'stok' => 18, 'harga' => 'Rp 1.200.000', 'gambar' => 'masterrem.jpg'],
            ['id' => 6, 'nama' => 'Engine Mounting Shijiro',  'kategori' => 'Rangka',    'stok' => 25, 'harga' => 'Rp 500.000',   'gambar' => 'mounting.jpg'],
            ['id' => 7, 'nama' => 'Paket Lampu BiLED',        'kategori' => 'Elektrikal','stok' => 10, 'harga' => 'Rp 2.500.000', 'gambar' => 'biled.jpg'],
            ['id' => 8, 'nama' => 'CVT Billet Shijiro',        'kategori' => 'Mesin',     'stok' => 6,  'harga' => 'Rp 4.500.000', 'gambar' => 'cvt.jpg'],
        ];

        return view('pengelolaan', compact('username', 'produk'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $profileData = [
            'username' => $username,
            'nama_lengkap' => 'Admin Toko Ngabers',
            'email' => strtolower($username) . '@ngabers.id',
            'jabatan' => 'Store Manager',
            'bergabung' => 'Januari 2024',
            'lokasi' => 'Jember, Jawa Timur',
            'telepon' => '+62 812-3456-7890',
        ];

        return view('profile', compact('username', 'profileData'));
    }
}
