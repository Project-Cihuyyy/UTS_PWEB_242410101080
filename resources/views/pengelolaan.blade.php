@extends('layouts.app')

@section('title', 'Pengelolaan Produk – Toko Ngabers')
@section('page-title', 'Pengelolaan Produk')

@section('head')
<style>
    .table-dark-custom {
        background-color: #1e1e1e;
        color: #f5f5f5;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--brand-border, #2E2E2E);
    }

    .table-dark-custom thead th {
        background-color: #161616;
        font-family: 'Syne', sans-serif;
        font-size: 0.72rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #888;
        padding: 0.9rem 1.1rem;
        border-bottom: 1px solid var(--brand-border, #2E2E2E);
        border-top: none;
    }

    .table-dark-custom tbody td {
        padding: 0.85rem 1.1rem;
        border-color: #252525;
        vertical-align: middle;
        font-size: 0.9rem;
        color: #1a1a1a;
    }

    .table-dark-custom tbody tr:hover {
        background-color: rgba(255,77,0,0.05);
    }

    .badge-kategori {
        font-size: 0.72rem;
        font-weight: 600;
        padding: 0.3em 0.7em;
        border-radius: 6px;
        letter-spacing: 0.5px;
        background: rgba(255,77,0,0.15);
        color: #ff8c5a;
    }

    .stok-low  { color: #ff6b6b; font-weight: 600; }
    .stok-ok   { color: #4ddb8e; font-weight: 600; }
    .stok-mid  { color: #ffd34d; font-weight: 600; }

    .page-header-card {
        background: linear-gradient(135deg, #1e1e1e, #161616);
        border: 1px solid var(--brand-border, #2E2E2E);
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .total-badge {
        background: rgba(255,77,0,0.12);
        border: 1px solid rgba(255,77,0,0.25);
        color: var(--brand-primary, #FF4D00);
        border-radius: 8px;
        padding: 0.4rem 0.9rem;
        font-family: 'Syne', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
    }

    .prod-img {
        width: 55px;
        height: 55px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #2e2e2e;
        background: #111;
        display: block;
    }
</style>
@endsection

@section('content')

<div class="page-header-card">
    <div>
        <h5 style="font-family:'Syne',sans-serif; margin:0; color:#fff;">
            <i class="bi bi-box-seam-fill me-2" style="color:var(--brand-primary)"></i>
            Daftar Produk
        </h5>
        <p style="font-size:0.8rem; color:#888; margin:0.2rem 0 0;">Semua produk yang tersedia di Toko Ngabers</p>
    </div>
    <div class="total-badge">
        <i class="bi bi-stack me-1"></i> {{ count($produk) }} Produk
    </div>
</div>

<div class="table-responsive table-dark-custom">
    <table class="table mb-0" style="table-layout: auto; width: 100%; min-width: 700px;">
        <thead>
            <tr>
                <th style="width:40px;">#</th>
                <th style="width:80px;">Foto</th>
                <th>Nama Produk</th>
                <th style="width:130px;">Kategori</th>
                <th style="width:80px;">Stok</th>
                <th style="width:150px;">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)
            <tr>
                <td style="color:#555;">{{ $item['id'] }}</td>
                <td>
                    <img
                        src="{{ asset('images/produk/' . $item['gambar']) }}"
                        alt="{{ $item['nama'] }}"
                        style="width:55px; height:55px; object-fit:cover; border-radius:8px; border:1px solid #2e2e2e; background:#111;"
                        onerror="this.src='https://placehold.co/55x55/1a1a1a/555?text=No+Img'"
                    >
                </td>

                <td style="white-space: nowrap;">
                    <span style="font-weight: 500;">{{ $item['nama'] }}</span>
                </td>

                <td>
                    <span class="badge-kategori">{{ $item['kategori'] }}</span>
                </td>

                <td>
                    @if ($item['stok'] <= 8)
                        <span class="stok-low"><i class="bi bi-exclamation-circle me-1"></i>{{ $item['stok'] }}</span>
                    @elseif ($item['stok'] <= 15)
                        <span class="stok-mid">{{ $item['stok'] }}</span>
                    @else
                        <span class="stok-ok">{{ $item['stok'] }}</span>
                    @endif
                </td>

                <td style="font-family:'Syne',sans-serif; color:var(--brand-primary);">
                    {{ $item['harga'] }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection