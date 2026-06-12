<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <div class="mx-auto max-w-5xl p-6">
        <header class="mb-8 rounded-3xl bg-slate-900/90 p-8 shadow-xl shadow-slate-950/20 ring-1 ring-slate-700">
            <h1 class="text-4xl font-bold tracking-tight text-white">Exemplo Tailwind no Laravel</h1>
            <p class="mt-3 text-slate-300">Esta página usa classes Tailwind diretamente no Blade.</p>
        </header>

        <section class="grid gap-6 md:grid-cols-2">
            <div class="rounded-3xl bg-slate-800/95 p-6 ring-1 ring-slate-700">
                <h2 class="text-2xl font-semibold text-white">Cartão de destaque</h2>
                <p class="mt-2 text-slate-300">Use utilitários como <span class="rounded bg-slate-900 px-2 py-1 text-sm text-slate-200">bg-blue-500</span>, <span class="rounded bg-slate-900 px-2 py-1 text-sm text-slate-200">text-white</span> e <span class="rounded bg-slate-900 px-2 py-1 text-sm text-slate-200">rounded-full</span>.</p>
                <button class="mt-4 inline-flex items-center justify-center rounded-full bg-cyan-500 px-5 py-3 font-semibold text-slate-950 transition hover:bg-cyan-400">Botão Tailwind</button>
            </div>

            <div class="rounded-3xl bg-slate-800/95 p-6 ring-1 ring-slate-700">
                <h2 class="text-2xl font-semibold text-white">Passos</h2>
                <ul class="mt-4 space-y-3 text-slate-300">
                    <li class="rounded-2xl bg-slate-900/80 p-3">Instalar dependências: <code class="rounded bg-slate-950 px-2 py-1 text-sm text-cyan-300">npm install</code></li>
                    <li class="rounded-2xl bg-slate-900/80 p-3">Rodar Vite: <code class="rounded bg-slate-950 px-2 py-1 text-sm text-cyan-300">npm run dev</code></li>
                    <li class="rounded-2xl bg-slate-900/80 p-3">Adicionar classes CSS direto no Blade</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
