<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameHub</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white overflow-x-hidden min-h-screen text-gray-800">

<div class="absolute top-[-120px] left-[-120px] w-[420px] h-[420px] bg-blue-400 opacity-25 rounded-full blur-3xl"></div>
<div class="absolute bottom-[-120px] right-[-120px] w-[420px] h-[420px] bg-pink-400 opacity-25 rounded-full blur-3xl"></div>

<header class="relative z-10 flex justify-between items-center px-10 py-6">
    <h1 class="font-mine text-xl text-blue-600">
        🎮 GameHub
    </h1>

    <nav class="flex gap-4">
        <a href="/login" class="pixel-btn border border-blue-500 text-blue-600 hover:bg-blue-50">
            Login
        </a>

        <a href="/register" class="pixel-btn bg-pink-500 text-white hover:bg-pink-600">
            Registrar
        </a>
    </nav>
</header>

<section class="relative z-10 px-6 mt-14 text-center flex flex-col items-center">

    <span class="font-mine text-xs text-pink-500 mb-5">
        LEVEL UP YOUR GAMES
    </span>

    <h2 class="font-mine text-3xl md:text-5xl leading-relaxed max-w-5xl">
        Seu portal definitivo para
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-pink-500">
            jogos
        </span>
    </h2>

    <p class="mt-8 text-gray-600 max-w-2xl text-lg">
        Cadastre, organize e explore jogos em uma interface limpa,
        moderna e inspirada no universo gamer.
    </p>

    <div class="mt-10 flex flex-col sm:flex-row gap-5">
        <a href="/register"
           class="pixel-btn bg-blue-600 text-white hover:bg-blue-700">
            Começar 🚀
        </a>

        <a href="/login"
           class="pixel-btn border border-pink-500 text-pink-500 hover:bg-pink-50">
            Entrar
        </a>
    </div>

</section>

<section class="relative z-10 mt-24 px-10 grid md:grid-cols-4 gap-8">

    <div class="glass-card">
        <h3 class="font-mine text-sm text-blue-600 mb-4">🎮 Jogos</h3>
        <p class="text-gray-600 text-sm">Organize sua biblioteca de jogos.</p>
    </div>

    <div class="glass-card">
        <h3 class="font-mine text-sm text-pink-500 mb-4">👤 Players</h3>
        <p class="text-gray-600 text-sm">Gerencie usuários e perfis.</p>
    </div>

    <div class="glass-card">
        <h3 class="font-mine text-sm text-blue-600 mb-4">🏷️ Tags</h3>
        <p class="text-gray-600 text-sm">Separe por categoria e estilo.</p>
    </div>

    <div class="glass-card">
        <h3 class="font-mine text-sm text-pink-500 mb-4">⭐ Reviews</h3>
        <p class="text-gray-600 text-sm">Avaliações da comunidade.</p>
    </div>

</section>

<section class="relative z-10 mt-24 px-10 grid md:grid-cols-3 gap-8 text-center">

    <div class="stat-card">
        <h4 class="font-mine text-2xl text-blue-600">+1000</h4>
        <p class="mt-4 text-gray-500">Jogos cadastrados</p>
    </div>

    <div class="stat-card">
        <h4 class="font-mine text-2xl text-pink-500">+500</h4>
        <p class="mt-4 text-gray-500">Usuários ativos</p>
    </div>

    <div class="stat-card">
        <h4 class="font-mine text-2xl text-blue-600">+10K</h4>
        <p class="mt-4 text-gray-500">Reviews feitas</p>
    </div>

</section>

<section class="relative z-10 mt-24 mb-20 text-center px-6">

    <h3 class="font-mine text-2xl md:text-3xl text-gray-800 mb-8">
        Pronto para jogar?
    </h3>

    <a href="/register"
       class="pixel-btn bg-gradient-to-r from-blue-500 to-pink-500 text-white inline-block">
        Criar conta grátis
    </a>

</section>

</body>
</html>