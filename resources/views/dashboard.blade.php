@extends('layouts.app')

@section('title', 'Dashboard – Toko Ngabers')
@section('page-title', 'Dashboard')

@section('head')
<style>
    .stat-card {
        background-color: var(--brand-card, #222);
        border: 1px solid var(--brand-border, #2E2E2E);
        border-radius: 12px;
        padding: 1.4rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 1.1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.4);
    }

    .stat-icon {
        width: 52px; height: 52px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem;
        flex-shrink: 0;
    }

    .stat-icon.primary { background: rgba(13,110,253,0.15); color: #4d9eff; }
    .stat-icon.success { background: rgba(25,135,84,0.15);  color: #4ddb8e; }
    .stat-icon.warning { background: rgba(255,193,7,0.15);  color: #ffd34d; }
    .stat-icon.danger  { background: rgba(220,53,69,0.15);  color: #ff6b6b; }

    .stat-value {
        font-family: 'Syne', sans-serif;
        font-size: 1.5rem;
        font-weight: 800;
        line-height: 1;
        color: #fff;
    }

    .stat-label {
        font-size: 0.8rem;
        color: var(--brand-muted, #888);
        margin-top: 0.25rem;
    }

    .welcome-banner {
        background: linear-gradient(135deg, #FF4D00 0%, #cc3d00 100%);
        border-radius: 14px;
        padding: 1.75rem 2rem;
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .welcome-banner h2 {
        font-family: 'Syne', sans-serif;
        font-size: 1.5rem;
        margin: 0;
        color: #fff;
    }

    .welcome-banner p {
        font-size: 0.85rem;
        color: rgba(255,255,255,0.75);
        margin: 0.3rem 0 0;
    }

    .welcome-icon {
        font-size: 3rem;
        opacity: 0.6;
    }

    .section-title {
        font-family: 'Syne', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #ccc;
    }
</style>
@endsection

@section('content')

{{-- Welcome Banner --}}
<div class="welcome-banner">
    <div>
        <h2>Halo, {{ $username }}! 👋</h2>
        <p>Selamat datang kembali di panel manajemen Toko Ngabers.</p>
    </div>
    <div class="welcome-icon"><i class="bi bi-shop"></i></div>
</div>

{{-- Stats --}}
<p class="section-title"><i class="bi bi-bar-chart-line-fill me-2" style="color:var(--brand-primary)"></i>Ringkasan Hari Ini</p>
<div class="row g-3 mb-4">
    @foreach ($stats as $stat)
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="stat-card">
            <div class="stat-icon {{ $stat['color'] }}">
                <i class="bi {{ $stat['icon'] }}"></i>
            </div>
            <div>
                <div class="stat-value">{{ $stat['value'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Quick Links --}}
<p class="section-title"><i class="bi bi-lightning-fill me-2" style="color:var(--brand-primary)"></i>Akses Cepat</p>
<div class="row g-3">
    <div class="col-12 col-md-6">
        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
           style="text-decoration:none;">
            <div class="stat-card" style="border-color:rgba(255,77,0,0.3);">
                <div class="stat-icon" style="background:rgba(255,77,0,0.15); color:var(--brand-primary);">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <div>
                    <div class="stat-value" style="font-size:1.1rem;">Pengelolaan Produk</div>
                    <div class="stat-label">Lihat daftar dan kelola produk toko</div>
                </div>
                <i class="bi bi-arrow-right ms-auto" style="color:var(--brand-muted);"></i>
            </div>
        </a>
    </div>
    <div class="col-12 col-md-6">
        <a href="{{ route('profile', ['username' => $username]) }}"
           style="text-decoration:none;">
            <div class="stat-card" style="border-color:rgba(255,77,0,0.3);">
                <div class="stat-icon" style="background:rgba(255,77,0,0.15); color:var(--brand-primary);">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <div class="stat-value" style="font-size:1.1rem;">Profile Saya</div>
                    <div class="stat-label">Lihat informasi akun kamu</div>
                </div>
                <i class="bi bi-arrow-right ms-auto" style="color:var(--brand-muted);"></i>
            </div>
        </a>
    </div>
</div>

@endsection
