<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack Hub — Jogos para todo mundo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased overflow-x-hidden">

    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 h-16 flex items-center">
        <div class="w-full max-w-6xl mx-auto px-6 flex items-center justify-between">
            <a href="{{ route('Index') }}" class="flex items-center gap-2 font-bold text-lg text-slate-900 hover:text-blue-600 transition-colors">
                <img src="{{ asset('images/logocrackhub.png') }}" alt="Logo Crack Hub" class="w-8 h-8 rounded-lg">
                Crack Hub
            </a>

            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-blue-600 rounded-full hover:bg-blue-50 transition-all">
                    Entrar
                </a>

                <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold bg-blue-600 text-white rounded-full hover:bg-blue-700 active:scale-95 transition-all">
                    Criar conta
                </a>
            </div>
        </div>
    </nav>

    <main>

        <section class="relative min-h-screen flex flex-col items-center justify-center text-center px-6 pt-24 pb-16 overflow-hidden">

            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[500px] bg-blue-100 rounded-full blur-3xl opacity-60 pointer-events-none -z-10"></div>
            <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-pink-100 rounded-full blur-3xl opacity-70 pointer-events-none -z-10"></div>
            <div class="absolute top-40 left-0 w-[300px] h-[300px] bg-pink-50 rounded-full blur-3xl opacity-50 pointer-events-none -z-10"></div>

            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-pink-50 border border-pink-200 text-pink-600 text-sm font-medium rounded-full mb-8">
                <span class="w-2 h-2 bg-pink-400 rounded-full animate-pulse"></span>
                Plataforma gratuita · Sem cartão de crédito
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6">
                Seus jogos,<br>
                <span class="text-blue-600 relative inline-block">
                    num só lugar
                </span>
            </h1>

            <p class="max-w-xl text-lg md:text-xl text-slate-500 leading-relaxed mb-10">
                O Crack Hub é uma plataforma para você descobrir, acessar e organizar jogos de forma simples.
            </p>

            <div class="flex flex-col sm:flex-row items-center gap-4">
                <a href="{{ route('register') }}"
                   class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold text-base rounded-full shadow-lg shadow-blue-200 hover:bg-blue-700 active:scale-95 transition-all">
                    Começar agora
                </a>

                <a href="{{ route('login') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-white text-blue-600 font-semibold text-base rounded-full border-2 border-blue-200 hover:border-blue-400 hover:bg-blue-50 active:scale-95 transition-all">
                    Já tenho conta
                </a>
            </div>
        </section>

        <section class="py-24 px-6">
            <div class="max-w-3xl mx-auto bg-blue-600 rounded-3xl p-16 text-center relative overflow-hidden">

                <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight mb-4">
                    Pronto para jogar?
                </h2>

                <p class="text-blue-100 text-lg mb-10">
                    Crie sua conta gratuita e explore o catálogo completo agora mesmo.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}"
                       class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-pink-50 active:scale-95 transition-all shadow-lg">
                        Criar conta grátis
                    </a>

                    <a href="{{ route('login') }}"
                       class="px-8 py-4 bg-transparent text-white font-semibold rounded-full border-2 border-white/40 hover:border-white hover:bg-white/10 active:scale-95 transition-all">
                        Já tenho conta
                    </a>
                </div>
            </div>
        </section>

    </main>

    <footer class="border-t border-slate-100 py-8 px-6">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">

            <div class="flex items-center gap-2 text-sm text-slate-400">
                <img src="{{ asset('images/logocrackhub.png') }}" alt="Logo" class="w-5 h-5 rounded opacity-40">
                © {{ date('Y') }} Crack Hub
            </div>

            <nav class="flex gap-6 text-sm text-slate-400">
                <a href="{{ route('login') }}" class="hover:text-blue-500 transition-colors">
                    Login
                </a>

                <a href="{{ route('register') }}" class="hover:text-pink-500 transition-colors">
                    Registro
                </a>
            </nav>

        </div>
    </footer>

</body>
</html>