<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login – Toko Ngabers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-primary: #FF4D00;
            --brand-dark:    #0D0D0D;
            --brand-mid:     #1A1A1A;
            --brand-border:  #2E2E2E;
            --brand-muted:   #888888;
        }

        * { box-sizing: border-box; }

        body {
            background-image: url("{{ asset('images/bg.jpeg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'DM Sans', sans-serif;
            background-color: var(--brand-dark);
            color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Decorative BG */
        body::before {
            content: '';
            position: fixed;
            top: -200px; right: -200px;
            width: 600px; height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,77,0,0.15) 0%, transparent 70%);
            pointer-events: none;
        }

        body::after {
            content: '';
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 0;
            pointer-events: none;
        }

        .login-card {
            background-color: var(--brand-mid);
            border: 1px solid var(--brand-border);
            border-radius: 16px;
            padding: 2.5rem 2.25rem;
            width: 100%;
            max-width: 420px;
            position: relative;
            z-index: 1;
            box-shadow: 0 24px 60px rgba(0,0,0,0.5);
        }

        .brand-logo {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.7rem;
            letter-spacing: -1px;
            color: #fff;
            margin-bottom: 0.25rem;
        }

        .brand-logo span { color: var(--brand-primary); }

        .login-sub {
            font-size: 0.85rem;
            color: var(--brand-muted);
            margin-bottom: 2rem;
        }

        .form-label {
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #aaa;
            margin-bottom: 0.4rem;
        }

        .form-control {
            background-color: #111;
            border: 1px solid var(--brand-border);
            color: #f5f5f5;
            border-radius: 8px;
            padding: 0.7rem 1rem;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus {
            background-color: #111;
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 3px rgba(255,77,0,0.15);
            color: #f5f5f5;
        }

        .form-control::placeholder { color: #555; }

        .btn-login {
            background-color: var(--brand-primary);
            border: none;
            color: #fff;
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            border-radius: 8px;
            padding: 0.75rem;
            width: 100%;
            letter-spacing: 0.5px;
            transition: background-color 0.2s, transform 0.1s;
            margin-top: 0.5rem;
        }

        .btn-login:hover {
            background-color: #e04400;
            transform: translateY(-1px);
        }

        .btn-login:active { transform: translateY(0); }

        .divider-text {
            text-align: center;
            font-size: 0.75rem;
            color: var(--brand-muted);
            margin: 1.25rem 0 0;
        }

        .input-icon-wrap {
            position: relative;
        }

        .input-icon-wrap .bi {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #555;
            pointer-events: none;
        }

        .input-icon-wrap .form-control { padding-right: 2.5rem; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="brand-logo">TOKO<span>NGABERS</span></div>
        <p class="login-sub">Masuk ke panel manajemen toko kamu.</p>

        <form action="{{ route('do.login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-icon-wrap">
                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username..."
                        required
                        autocomplete="off"
                    >
                    <i class="bi bi-person"></i>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-icon-wrap">
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password..."
                        required
                    >
                    <i class="bi bi-lock"></i>
                </div>
            </div>

            <button type="submit" class="btn-login">
                Masuk <i class="bi bi-arrow-right-short"></i>
            </button>
        </form>

        <p class="divider-text">© {{ date('Y') }} TokoNgabers Management System</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
