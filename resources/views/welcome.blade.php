<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameHub</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white overflow-x-hidden">

<!-- Background blobs -->
<div class="absolute top-[-100px] left-[-100px] w-[400px] h-[400px] bg-blue-400 opacity-30 rounded-full blur-3xl animate-blob"></div>
<div class="absolute bottom-[-120px] right-[-100px] w-[400px] h-[400px] bg-pink-400 opacity-30 rounded-full blur-3xl animate-blob animation-delay-2000"></div>

<!-- Navbar -->
<header class="relative z-10 flex justify-between items-center px-10 py-6">
    <h1 class="text-3xl font-extrabold text-blue-600 tracking-wide">
        🎮 GameHub
    </h1>

    <div class="flex gap-4">
        <a href="/login" class="px-5 py-2 rounded-lg text-blue-600 hover:bg-blue-100 transition">
            Login
        </a>
        <a href="/register" class="px-5 py-2 bg-pink-500 text-white rounded-lg shadow-lg hover:scale-105 transition">
            Registrar
        </a>
    </div>
</header>

<!-- HERO -->
<section class="relative z-10 flex flex-col items-center text-center px-6 mt-10">

    <h2 class="text-6xl md:text-7xl font-extrabold text-gray-800 leading-tight animate-fade-up">
        O HUB definitivo de
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-pink-500">
            jogos
        </span>
    </h2>

    <p class="mt-6 text-lg text-gray-600 max-w-2xl animate-fade-up delay-200">
        Gerencie sua coleção, jogadores e reviews com uma interface moderna,
        rápida e totalmente responsiva.
    </p>

    <div class="mt-8 flex gap-4 animate-fade-up delay-300">
        <a href="/register"
           class="px-8 py-4 bg-blue-600 text-white rounded-xl shadow-xl hover:scale-110 hover:bg-blue-700 transition-all">
            Começar agora 🚀
        </a>

        <a href="/login"
           class="px-8 py-4 border border-blue-500 text-blue-600 rounded-xl hover:bg-blue-50 transition">
            Login
        </a>
    </div>

</section>

<!-- FEATURES -->
<section class="relative z-10 mt-20 px-10 grid md:grid-cols-4 gap-8">

    <div class="glass-card">
        <h3 class="text-xl font-bold text-blue-600 mb-2">🎮 Jogos</h3>
        <p class="text-gray-600 text-sm">Gerencie toda sua biblioteca.</p>
    </div>

    <div class="glass-card">
        <h3 class="text-xl font-bold text-pink-500 mb-2">👤 Jogadores</h3>
        <p class="text-gray-600 text-sm">Perfis e usuários.</p>
    </div>

    <div class="glass-card">
        <h3 class="text-xl font-bold text-blue-600 mb-2">🏷️ Categorias</h3>
        <p class="text-gray-600 text-sm">Organização total.</p>
    </div>

    <div class="glass-card">
        <h3 class="text-xl font-bold text-pink-500 mb-2">⭐ Reviews</h3>
        <p class="text-gray-600 text-sm">Feedback da comunidade.</p>
    </div>

</section>

<!-- STATS -->
<section class="relative z-10 mt-24 px-10 grid md:grid-cols-3 gap-8 text-center">

    <div class="stat-card">
        <h4 class="text-4xl font-bold text-blue-600">+1000</h4>
        <p class="text-gray-500">Jogos cadastrados</p>
    </div>

    <div class="stat-card">
        <h4 class="text-4xl font-bold text-pink-500">+500</h4>
        <p class="text-gray-500">Usuários ativos</p>
    </div>

    <div class="stat-card">
        <h4 class="text-4xl font-bold text-blue-600">+10k</h4>
        <p class="text-gray-500">Reviews feitas</p>
    </div>

</section>

<!-- CTA FINAL -->
<section class="relative z-10 mt-24 mb-20 text-center">

    <h3 class="text-4xl font-bold text-gray-800 mb-6">
        Pronto pra começar?
    </h3>

    <a href="/register"
       class="px-10 py-4 bg-gradient-to-r from-blue-500 to-pink-500 text-white rounded-xl shadow-xl hover:scale-110 transition">
        Criar conta grátis
    </a>

</section>

</body>
</html>