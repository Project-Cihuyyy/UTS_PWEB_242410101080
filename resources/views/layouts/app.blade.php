<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Ngabers')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-primary: #FF4D00;
            --brand-dark:    #0D0D0D;
            --brand-mid:     #1A1A1A;
            --brand-card:    #222222;
            --brand-border:  #2E2E2E;
            --brand-muted:   #888888;
            --brand-light:   #F5F5F5;
        }

        * { box-sizing: border-box; }

        body {
            background-image: url('/images/bg.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'DM Sans', sans-serif;
            background-color: var(--brand-dark);
            color: var(--brand-light);
            min-height: 100vh;
        }

        body::after {
            content: '';
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 0;
            pointer-events: none;
        }

        .sidebar {
            z-index: 200; /* naikkan dari 100 */
        }

        .topbar {
            z-index: 199; /* naikkan dari 99 */
        }

        .main-wrapper {
            position: relative;
            z-index: 1;
        }

        .page-content {
            position: relative;
            z-index: 1;
        }

        h1, h2, h3, h4, h5, h6, .brand-font {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
        }

        .sidebar {
            width: 240px;
            min-height: 100vh;
            background-color: var(--brand-mid);
            border-right: 1px solid var(--brand-border);
            position: fixed;
            top: 0; left: 0;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .sidebar-brand {
            padding: 1.5rem 1.25rem;
            border-bottom: 1px solid var(--brand-border);
        }

        .sidebar-brand .logo-text {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1rem;
            color: #fff;
            letter-spacing: -0.5px;
        }

        .sidebar-brand .logo-text span {
            color: var(--brand-primary);
        }

        .sidebar-nav {
            padding: 1rem 0;
            flex: 1;
        }

        .sidebar-nav .nav-label {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--brand-muted);
            padding: 0.5rem 1.25rem;
            margin-top: 0.5rem;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.65rem 1.25rem;
            color: var(--brand-muted);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }

        .sidebar-nav a:hover,
        .sidebar-nav a.active {
            color: #fff;
            background-color: rgba(255,77,0,0.08);
            border-left-color: var(--brand-primary);
        }

        .sidebar-nav a i { font-size: 1.1rem; }

        .main-wrapper {
            margin-left: 240px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            background-color: var(--brand-mid);
            border-bottom: 1px solid var(--brand-border);
            padding: 0.85rem 1.75rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 99;
        }

        .topbar .page-title {
            font-family: 'Syne', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0;
        }

        .topbar .user-badge {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-size: 0.85rem;
            color: var(--brand-muted);
        }

        .topbar .avatar {
            width: 32px; height: 32px;
            background: var(--brand-primary);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 0.8rem;
            color: #fff;
        }

        .page-content {
            padding: 2rem 1.75rem;
            flex: 1;
        }

        @yield('extra-styles')
    </style>

    @yield('head')
</head>
<body>

{{-- Sidebar --}}
<x-navbar />

{{-- Main --}}
<div class="main-wrapper">

    {{-- Topbar --}}
    <div class="topbar">
        <h1 class="page-title">@yield('page-title', 'Dashboard')</h1>
        <div class="user-badge">
            <div class="avatar">{{ strtoupper(substr(request()->query('username', 'G'), 0, 1)) }}</div>
            <span>{{ request()->query('username', 'Guest') }}</span>
        </div>
    </div>

    {{-- Content --}}
    <div class="page-content">
        @yield('content')
    </div>

    {{-- Footer --}}
    <x-footer />
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>
