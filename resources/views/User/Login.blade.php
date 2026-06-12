<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar — Crack Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased overflow-x-hidden">

    <main class="relative min-h-screen flex items-center justify-center px-6 py-20 overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[500px] bg-blue-100 rounded-full blur-3xl opacity-60 -z-10"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-pink-100 rounded-full blur-3xl opacity-70 -z-10"></div>

        <div class="w-full max-w-md bg-white border border-slate-100 rounded-3xl shadow-xl shadow-blue-50 p-8">
            <div class="text-center mb-8">
                <img src="{{ asset('images/logocrackhub.png') }}" class="w-14 h-14 mx-auto rounded-xl mb-4" alt="Logo">
                <h1 class="text-3xl font-extrabold text-slate-900">Entrar</h1>
                <p class="text-slate-500 mt-2">Acesse sua conta no Crack Hub.</p>
            </div>

            <form method="POST" action="{{ route('User.Login.Post') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">E-mail</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-400 focus:ring-4 focus:ring-blue-100 outline-none transition-all">
                    @error('email')
                        <p class="text-sm text-pink-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Senha</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-400 focus:ring-4 focus:ring-blue-100 outline-none transition-all">
                    @error('password')
                        <p class="text-sm text-pink-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full py-3 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 active:scale-95 transition-all shadow-lg shadow-blue-200">
                    Entrar
                </button>
            </form>

            <p class="text-center text-sm text-slate-500 mt-8">
                Não tem conta?
                <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-700">
                    Criar conta
                </a>
            </p>
        </div>
    </main>

</body>
</html>