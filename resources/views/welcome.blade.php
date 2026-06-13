<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: #ffffff;
            color: #1a1a2e;
        }

        /* ── Navbar ── */
        .gh-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem 2rem;
            border-bottom: 1px solid #fce7f3;
            background: #fff;
        }

        .gh-logo {
            font-size: 18px;
            font-weight: 700;
            color: #2563eb;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .gh-logo i { font-size: 22px; }

        .gh-nav-actions { display: flex; gap: 10px; }

        .btn-ghost {
            padding: 8px 20px;
            border-radius: 99px;
            font-size: 14px;
            border: 1.5px solid #2563eb;
            background: transparent;
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-ghost:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }

        .btn-pink {
            padding: 8px 20px;
            border-radius: 99px;
            font-size: 14px;
            border: none;
            background: #ec4899;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-pink:hover {
            background: #db2777;
            color: #fff;
        }

        /* ── Hero ── */
        .gh-hero {
            padding: 5rem 2rem 4rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            background: linear-gradient(160deg, #eff6ff 0%, #fdf2f8 100%);
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #fff;
            color: #2563eb;
            font-size: 13px;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 99px;
            border: 1px solid #bfdbfe;
        }

        .gh-title {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 800;
            line-height: 1.15;
            max-width: 600px;
        }

        .gh-title .t-blue { color: #2563eb; }
        .gh-title .t-pink { color: #ec4899; }

        .gh-subtitle {
            font-size: 16px;
            color: #6b7280;
            max-width: 480px;
            line-height: 1.7;
        }

        .hero-ctas {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-blue {
            padding: 12px 28px;
            border-radius: 99px;
            font-size: 15px;
            font-weight: 700;
            background: #2563eb;
            color: #fff;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s, transform 0.2s;
        }

        .btn-blue:hover {
            background: #1d4ed8;
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-pink-outline {
            padding: 12px 28px;
            border-radius: 99px;
            font-size: 15px;
            font-weight: 700;
            background: #ec4899;
            color: #fff;
            border: none;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
        }

        .btn-pink-outline:hover {
            background: #db2777;
            color: #fff;
            transform: translateY(-2px);
        }

        /* ── Feature cards ── */
        .gh-features {
            padding: 3rem 2rem;
            background: #fff;
        }

        .feat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 16px;
            max-width: 900px;
            margin: 0 auto;
        }

        .feat-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 1.5rem 1.25rem;
            display: flex;
            flex-direction: column;
            gap: 12px;
            transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
        }

        .feat-card:hover {
            border-color: #bfdbfe;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.08);
            transform: translateY(-4px);
        }

        .feat-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feat-icon i { font-size: 22px; }
        .feat-title { font-size: 15px; font-weight: 700; color: #1a1a2e; }
        .feat-desc { font-size: 13px; color: #6b7280; line-height: 1.5; }

        /* ── Stats ── */
        .gh-stats {
            padding: 3rem 2rem;
            background: linear-gradient(160deg, #eff6ff 0%, #fdf2f8 100%);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            max-width: 900px;
            margin: 0 auto;
        }

        .stat-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 2rem 1.5rem;
            text-align: center;
            transition: transform 0.2s;
        }

        .stat-card:hover { transform: scale(1.04); }
        .stat-num { font-size: 2.2rem; font-weight: 800; }
        .stat-label { font-size: 14px; color: #6b7280; margin-top: 6px; }

        /* ── CTA final ── */
        .gh-cta-wrap { padding: 2.5rem 2rem; background: #fff; }

        .gh-cta {
            max-width: 900px;
            margin: 0 auto;
            padding: 3rem 2rem;
            background: #2563eb;
            border-radius: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .cta-title { font-size: 1.6rem; font-weight: 800; color: #fff; }
        .cta-sub { font-size: 15px; color: #bfdbfe; }

        .btn-white {
            padding: 12px 28px;
            border-radius: 99px;
            font-size: 15px;
            font-weight: 700;
            background: #fff;
            color: #2563eb;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s, transform 0.2s;
        }

        .btn-white:hover {
            background: #eff6ff;
            color: #1d4ed8;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    <header class="gh-nav">
        <a href="/" class="gh-logo">
            <i class="ti ti-device-gamepad-2"></i>
            GameHub
        </a>
        <nav class="gh-nav-actions">
            <a href="{{ route('login') }}" class="btn-ghost">Login</a>
            <a href="{{ route('register') }}" class="btn-pink">Registrar</a>
        </nav>
    </header>

    <main>

        {{-- Hero --}}
        <section class="gh-hero">
            <div class="hero-badge">
                <i class="ti ti-sparkles"></i>
                Plataforma de jogos #1
            </div>

            <h1 class="gh-title">
                O hub <span class="t-blue">definitivo</span> de jogos
                para sua <span class="t-pink">comunidade</span>
            </h1>

            <p class="gh-subtitle">
                Gerencie sua coleção, jogadores e reviews com uma interface
                moderna, rápida e totalmente responsiva.
            </p>

            <div class="hero-ctas">
                <a href="/register" class="btn-blue">
                    Começar agora <i class="ti ti-arrow-right"></i>
                </a>
                <a href="/login" class="btn-pink-outline">
                    Fazer login
                </a>
            </div>
        </section>

        {{-- Feature cards --}}
        <section class="gh-features">
            <div class="feat-grid">
                <div class="feat-card">
                    <div class="feat-icon" style="background:#eff6ff;">
                        <i class="ti ti-device-gamepad-2" style="color:#2563eb;"></i>
                    </div>
                    <div class="feat-title">Jogos</div>
                    <div class="feat-desc">Gerencie toda sua biblioteca com facilidade</div>
                </div>

                <div class="feat-card">
                    <div class="feat-icon" style="background:#fdf2f8;">
                        <i class="ti ti-users" style="color:#ec4899;"></i>
                    </div>
                    <div class="feat-title">Jogadores</div>
                    <div class="feat-desc">Perfis completos e gestão de usuários</div>
                </div>

                <div class="feat-card">
                    <div class="feat-icon" style="background:#eff6ff;">
                        <i class="ti ti-tag" style="color:#2563eb;"></i>
                    </div>
                    <div class="feat-title">Categorias</div>
                    <div class="feat-desc">Organização total do seu catálogo</div>
                </div>

                <div class="feat-card">
                    <div class="feat-icon" style="background:#fdf2f8;">
                        <i class="ti ti-star" style="color:#ec4899;"></i>
                    </div>
                    <div class="feat-title">Reviews</div>
                    <div class="feat-desc">Feedback real da comunidade de jogadores</div>
                </div>
            </div>
        </section>

        {{-- Stats --}}
        <section class="gh-stats">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-num" style="color:#2563eb;">+1.000</div>
                    <div class="stat-label">Jogos cadastrados</div>
                </div>
                <div class="stat-card">
                    <div class="stat-num" style="color:#ec4899;">+500</div>
                    <div class="stat-label">Usuários ativos</div>
                </div>
                <div class="stat-card">
                    <div class="stat-num" style="color:#2563eb;">+10k</div>
                    <div class="stat-label">Reviews feitas</div>
                </div>
            </div>
        </section>

        {{-- CTA final --}}
        <section class="gh-cta-wrap">
            <div class="gh-cta">
                <div class="cta-title">Pronto para começar?</div>
                <div class="cta-sub">Crie sua conta grátis e junte-se à comunidade</div>
                <a href="/register" class="btn-white">
                    Criar conta grátis <i class="ti ti-arrow-right"></i>
                </a>
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>