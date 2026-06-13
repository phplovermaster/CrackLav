<x-guest-layout>
    <style>
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
        a {
            color: inherit;
            text-decoration: none;
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
            margin-bottom: 15px;
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
            height: 46px;
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

        .gh-btn {
            width: 100%;
            height: 48px;
            margin-top: 6px;
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

        .gh-link {
            margin: 20px 0 0;
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

    <h1 class="gh-title">Criar conta</h1>
    <p class="gh-subtitle">Junte-se à <span>comunidade GameHub</span></p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="gh-field">
            <label class="gh-label" for="name">Nome</label>
            <input
                id="name"
                class="gh-input"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                placeholder="Seu nome"
            >
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="gh-field">
            <label class="gh-label" for="email">E-mail</label>
            <input
                id="email"
                class="gh-input"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
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
                autocomplete="new-password"
                placeholder="••••••••"
            >
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="gh-field">
            <label class="gh-label" for="password_confirmation">Confirmar senha</label>
            <input
                id="password_confirmation"
                class="gh-input"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="••••••••"
            >
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button type="submit" class="gh-btn">Criar conta grátis</button>
    </form>

    <p class="gh-link">
        Já tem conta? <a href="/login">Fazer login</a>
    </p>
</x-guest-layout>