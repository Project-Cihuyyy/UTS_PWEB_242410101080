<aside class="sidebar">
    <div class="sidebar-brand">
        <div class="logo-text">TOKO<span>NGABERS</span></div>
        <div style="font-size:0.7rem; color:var(--brand-muted); margin-top:2px;">Management System</div>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-label">Menu Utama</div>

        <a href="{{ route('dashboard', ['username' => request()->query('username', 'Guest')]) }}"
           class="{{ request()->is('dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2-fill"></i> Dashboard
        </a>

        <a href="{{ route('pengelolaan', ['username' => request()->query('username', 'Guest')]) }}"
           class="{{ request()->is('pengelolaan') ? 'active' : '' }}">
            <i class="bi bi-box-seam-fill"></i> Pengelolaan Produk
        </a>

        <a href="{{ route('profile', ['username' => request()->query('username', 'Guest')]) }}"
           class="{{ request()->is('profile') ? 'active' : '' }}">
            <i class="bi bi-person-circle"></i> Profile
        </a>

        <div class="nav-label" style="margin-top:1.5rem;">Akun</div>

        <a href="{{ route('login') }}" style="color:#e05252;">
            <i class="bi bi-box-arrow-left"></i> Keluar
        </a>
    </nav>
</aside>
