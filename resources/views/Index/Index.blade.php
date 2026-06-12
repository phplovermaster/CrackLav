<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack Hub — Jogos para todo mundo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased overflow-x-hidden">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 h-16 flex items-center">
        <div class="w-full max-w-6xl mx-auto px-6 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 font-bold text-lg text-slate-900 hover:text-blue-600 transition-colors">
                <img src="{{ asset('images/logocrackhub.png') }}" alt="Logo Crack Hub" class="w-8 h-8 rounded-lg">
                Crack Hub
            </a>
            <div class="flex items-center gap-3">
                <a href="/login" class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-blue-600 rounded-full hover:bg-blue-50 transition-all">
                    Entrar
                </a>
                <a href="/register" class="px-4 py-2 text-sm font-semibold bg-blue-600 text-white rounded-full hover:bg-blue-700 active:scale-95 transition-all">
                    Criar conta
                </a>
            </div>
        </div>
    </nav>

    <main>

        {{-- HERO --}}
        <section class="relative min-h-screen flex flex-col items-center justify-center text-center px-6 pt-24 pb-16 overflow-hidden">

            {{-- Blobs decorativos --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[500px] bg-blue-100 rounded-full blur-3xl opacity-60 pointer-events-none -z-10"></div>
            <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-pink-100 rounded-full blur-3xl opacity-70 pointer-events-none -z-10"></div>
            <div class="absolute top-40 left-0 w-[300px] h-[300px] bg-pink-50 rounded-full blur-3xl opacity-50 pointer-events-none -z-10"></div>

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-pink-50 border border-pink-200 text-pink-600 text-sm font-medium rounded-full mb-8 animate-fade-in-up">
                <span class="w-2 h-2 bg-pink-400 rounded-full animate-pulse"></span>
                Plataforma gratuita · Sem cartão de crédito
            </div>

            {{-- Título --}}
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6 animate-fade-in-up-delay-1">
                Seus jogos,<br>
                <span class="text-blue-600 relative inline-block">
                    num só lugar
                    <svg class="absolute -bottom-2 left-0 w-full h-3" viewBox="0 0 280 10" fill="none" aria-hidden="true">
                        <path d="M2 8C55 2 110 1 140 1C170 1 225 2 278 8" stroke="#f9a8d4" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </span>
            </h1>

            {{-- Subtítulo --}}
            <p class="max-w-xl text-lg md:text-xl text-slate-500 leading-relaxed mb-10 animate-fade-in-up-delay-2">
                O Crack Hub é uma plataforma para você descobrir, acessar e organizar
                jogos de forma simples. Busque por categoria, explore novos títulos e jogue na hora.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row items-center gap-4 animate-fade-in-up-delay-3">
                <a href="/register"
                   class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold text-base rounded-full shadow-lg shadow-blue-200 hover:bg-blue-700 active:scale-95 transition-all">
                    Começar agora
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="/login"
                   class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-white text-blue-600 font-semibold text-base rounded-full border-2 border-blue-200 hover:border-blue-400 hover:bg-blue-50 active:scale-95 transition-all">
                    Já tenho conta
                </a>
            </div>

            <p class="mt-6 text-sm text-slate-400 animate-fade-in-up-delay-4">Rápido de cadastrar. Zero burocracia.</p>

            {{-- Scroll hint --}}
            <a href="#features" class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1 text-slate-400 hover:text-blue-500 text-xs transition-colors">
                <span>Ver mais</span>
                <svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </section>

        {{-- FEATURES --}}
        <section id="features" class="py-24 px-6 bg-slate-50">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-pink-500">Por que o Crack Hub?</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Feito para jogadores de verdade</h2>
                    <p class="mt-4 text-lg text-slate-500 max-w-md mx-auto">Sem assinatura, sem complicação. Só você e os jogos.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-lg hover:shadow-blue-50 hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">⚡</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Acesso imediato</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Cadastre-se e acesse qualquer título da biblioteca na hora. Sem espera, sem fila.</p>
                    </div>
                    <div class="group bg-white rounded-2xl p-8 border border-slate-100 hover:border-pink-200 hover:shadow-lg hover:shadow-pink-50 hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">🔍</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Busca por categoria</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Filtre por RPG, ação, estratégia e muito mais. Encontre exatamente o que quer jogar.</p>
                    </div>
                    <div class="group bg-white rounded-2xl p-8 border border-slate-100 hover:border-pink-200 hover:shadow-lg hover:shadow-pink-50 hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">🗂️</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Catálogo organizado</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Cada jogo com descrição, categoria e data de lançamento. Tudo que você precisa antes de jogar.</p>
                    </div>
                    <div class="group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-lg hover:shadow-blue-50 hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">🛡️</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Conta segura</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Login protegido e sessão controlada. Seus dados ficam com você.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- COMO FUNCIONA --}}
        <section class="py-24 px-6 bg-white text-center">
            <div class="max-w-4xl mx-auto">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Como funciona</span>
                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mb-16">Em três passos simples</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-blue-600 text-white font-extrabold text-xl flex items-center justify-center mb-4 shadow-lg shadow-blue-200">1</div>
                        <h3 class="font-bold text-slate-900 mb-2">Crie sua conta</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Nome, e-mail e senha. Pronto, você já faz parte.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-pink-400 text-white font-extrabold text-xl flex items-center justify-center mb-4 shadow-lg shadow-pink-200">2</div>
                        <h3 class="font-bold text-slate-900 mb-2">Explore o catálogo</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Navegue pelos jogos ou use a busca para achar o seu favorito.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-blue-600 text-white font-extrabold text-xl flex items-center justify-center mb-4 shadow-lg shadow-blue-200">3</div>
                        <h3 class="font-bold text-slate-900 mb-2">Acesse e jogue</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Clique em qualquer título e vá direto para o jogo. Simples assim.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA FINAL --}}
        <section class="py-24 px-6">
            <div class="max-w-3xl mx-auto bg-blue-600 rounded-3xl p-16 text-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-pink-400 opacity-10 rounded-full -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-white opacity-5 rounded-full translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight mb-4 relative z-10">Pronto para jogar?</h2>
                <p class="text-blue-100 text-lg mb-10 relative z-10">Crie sua conta gratuita e explore o catálogo completo agora mesmo.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center relative z-10">
                    <a href="/register" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-pink-50 active:scale-95 transition-all shadow-lg">
                        Criar conta grátis
                    </a>
                    <a href="/login" class="px-8 py-4 bg-transparent text-white font-semibold rounded-full border-2 border-white/40 hover:border-white hover:bg-white/10 active:scale-95 transition-all">
                        Já tenho conta
                    </a>
                </div>
            </div>
        </section>

    </main>

    {{-- FOOTER --}}
    <footer class="border-t border-slate-100 py-8 px-6">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2 text-sm text-slate-400">
                <img src="{{ asset('images/logocrackhub.png') }}" alt="Logo" class="w-5 h-5 rounded opacity-40">
                © {{ date('Y') }} Crack Hub. Feito para jogadores.
            </div>
            <nav class="flex gap-6 text-sm text-slate-400" aria-label="Links do rodapé">
                <a href="/login" class="hover:text-blue-500 transition-colors">Login</a>
                <a href="/register" class="hover:text-pink-500 transition-colors">Registro</a>
            </nav>
        </div>
    </footer>

</body>
</html>