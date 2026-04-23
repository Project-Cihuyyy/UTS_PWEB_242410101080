@extends('layouts.app')

@section('title', 'Profile – Toko Ngabers')
@section('page-title', 'Profile')

@section('head')
<style>
    .profile-card {
        background-color: #1e1e1e;
        border: 1px solid var(--brand-border, #2E2E2E);
        border-radius: 16px;
        overflow: hidden;
        max-width: 640px;
        margin: 0 auto;
    }

    .profile-header {
        background: linear-gradient(135deg, #FF4D00, #cc3500);
        padding: 2.5rem 2rem 5rem;
        text-align: center;
        position: relative;
    }

    .profile-avatar {
        width: 90px; height: 90px;
        background: rgba(255,255,255,0.2);
        border: 3px solid rgba(255,255,255,0.5);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-family: 'Syne', sans-serif;
        font-weight: 800;
        font-size: 2.2rem;
        color: #fff;
        margin: 0 auto 1rem;
    }

    .profile-name {
        font-family: 'Syne', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        color: #fff;
        margin: 0;
    }

    .profile-role {
        font-size: 0.82rem;
        color: rgba(255,255,255,0.75);
        margin-top: 0.2rem;
    }

    .profile-body {
        padding: 3.5rem 2rem 1.75rem;
        margin-top: -2.5rem;
    }

    .info-row {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 0.85rem 0;
        border-bottom: 1px solid #2a2a2a;
    }

    .info-row:last-child { border-bottom: none; }

    .info-icon {
        width: 36px; height: 36px;
        background: rgba(255,77,0,0.12);
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        color: var(--brand-primary, #FF4D00);
        font-size: 1rem;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .info-label {
        font-size: 0.72rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #666;
        margin-bottom: 0.2rem;
    }

    .info-value {
        font-size: 0.92rem;
        color: #eee;
        font-weight: 500;
    }
</style>
@endsection

@section('content')

<div class="profile-card">
    <div class="profile-header">
        <div class="profile-avatar">
            {{ strtoupper(substr($profileData['username'], 0, 1)) }}
        </div>
        <h2 class="profile-name">{{ $profileData['username'] }}</h2>
        <p class="profile-role">{{ $profileData['jabatan'] }}</p>
    </div>

    <div class="profile-body">
        <div class="info-row">
            <div class="info-icon"><i class="bi bi-person-fill"></i></div>
            <div>
                <div class="info-label">Nama Lengkap</div>
                <div class="info-value">{{ $profileData['nama_lengkap'] }}</div>
            </div>
        </div>

        <div class="info-row">
            <div class="info-icon"><i class="bi bi-at"></i></div>
            <div>
                <div class="info-label">Username</div>
                <div class="info-value">{{ $profileData['username'] }}</div>
            </div>
        </div>

        <div class="info-row">
            <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
            <div>
                <div class="info-label">Email</div>
                <div class="info-value">{{ $profileData['email'] }}</div>
            </div>
        </div>

        <div class="info-row">
            <div class="info-icon"><i class="bi bi-briefcase-fill"></i></div>
            <div>
                <div class="info-label">Jabatan</div>
                <div class="info-value">{{ $profileData['jabatan'] }}</div>
            </div>
        </div>

        <div class="info-row">
            <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <div>
                <div class="info-label">Lokasi</div>
                <div class="info-value">{{ $profileData['lokasi'] }}</div>
            </div>
        </div>

        <div class="info-row">
            <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
            <div>
                <div class="info-label">Telepon</div>
                <div class="info-value">{{ $profileData['telepon'] }}</div>
            </div>
        </div>

        <div class="info-row">
            <div class="info-icon"><i class="bi bi-calendar-check-fill"></i></div>
            <div>
                <div class="info-label">Bergabung Sejak</div>
                <div class="info-value">{{ $profileData['bergabung'] }}</div>
            </div>
        </div>
    </div>
</div>

@endsection
