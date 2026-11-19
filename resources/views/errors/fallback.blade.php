<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — Página não encontrada | EcoLink</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen items-center justify-center bg-[#123c2f] px-5 text-white antialiased">
    <div class="max-w-lg text-center">
        <span class="inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-[#c9f36a] text-3xl text-[#123c2f]">🌱</span>
        <p class="mt-6 text-xs font-extrabold uppercase tracking-[.22em] text-[#c9f36a]">Erro 404 · Rota Fallback</p>
        <h1 class="mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl">Caminho não encontrado.</h1>
        <p class="mt-4 text-base leading-7 text-white/75">O endereço que você tentou acessar não existe na plataforma EcoLink ou foi movido.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <a href="{{ route('home') }}" class="rounded-full bg-[#c9f36a] px-6 py-3.5 text-sm font-extrabold text-[#123c2f] transition hover:-translate-y-0.5">Voltar para o Início</a>
            @auth
                <a href="{{ route('dashboard') }}" class="rounded-full border border-white/25 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/10">Ir para o Dashboard</a>
            @endauth
        </div>
    </div>
</body>
</html>