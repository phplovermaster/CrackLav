<x-guest-layout>
    <style>
        a {
            color: inherit;
            text-decoration: none;
        }
        .gh-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-bottom: 28px;
            color: #2563eb;
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .gh-title {
            margin: 0;
            font-size: 1.45rem;
            font-weight: 800;
            color: #111827;
        }

        .gh-subtitle {
            margin: 6px 0 26px;
            font-size: .9rem;
            color: #6b7280;
        }

        .gh-subtitle span {
            color: #ec4899;
            font-weight: 700;
        }

        .gh-field {
            margin-bottom: 16px;
        }

        .gh-label {
            display: block;
            margin-bottom: 7px;
            font-size: .8rem;
            font-weight: 700;
            color: #374151;
        }

        .gh-input {
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #fafafa;
            color: #111827;
            font-size: .9rem;
            outline: none;
            transition: .2s;
        }

        .gh-input:focus {
            background: #ffffff;
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, .08);
        }

        .gh-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 8px 0 18px;
            font-size: .85rem;
        }

        .gh-check {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #6b7280;
        }

        .gh-check input {
            accent-color: #2563eb;
        }

        .gh-forgot {
            color: #2563eb;
            font-weight: 700;
            text-decoration: none;
        }

        .gh-forgot:hover {
            color: #ec4899;
        }

        .gh-btn {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 12px;
            background: #2563eb;
            color: #ffffff;
            font-size: .95rem;
            font-weight: 800;
            cursor: pointer;
            transition: .25s;
        }

        .gh-btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(37, 99, 235, .22);
        }

        .gh-divider {
            height: 1px;
            background: #f1f5f9;
            margin: 24px 0 18px;
        }

        .gh-link {
            margin: 0;
            text-align: center;
            color: #6b7280;
            font-size: .85rem;
        }

        .gh-link a {
            color: #ec4899;
            font-weight: 800;
            text-decoration: none;
        }

        .gh-link a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="gh-logo">
        <span>🎮</span>
        <a href="/">GAMEHUB</a>
    </div>

    <h1 class="gh-title">Bem-vindo de volta</h1>
    <p class="gh-subtitle">Entre na sua <span>conta GameHub</span></p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="gh-field">
            <label class="gh-label" for="email">E-mail</label>
            <input
                id="email"
                class="gh-input"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="seu@email.com"
            >
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="gh-field">
            <label class="gh-label" for="password">Senha</label>
            <input
                id="password"
                class="gh-input"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="••••••••"
            >
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="gh-row">
            <label class="gh-check">
                <input type="checkbox" name="remember">
                <span>Lembrar</span>
            </label>

            @if (Route::has('password.request'))
                <a href="/forgot-password" class="gh-forgot">Esqueci a senha</a>
            @endif
        </div>

        <button type="submit" class="gh-btn">Entrar</button>
    </form>

    <div class="gh-divider"></div>

    <p class="gh-link">
        Não tem conta? <a href="/register">Criar conta grátis</a>
    </p>
</x-guest-layout>