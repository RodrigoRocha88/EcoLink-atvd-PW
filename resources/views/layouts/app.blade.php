<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'EcoLink') }} — Painel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; background: #f7f8f1; color: #18342a; }
        h1, h2, h3, .brand { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-[#f7f8f1]">
        @include('layouts.navigation')

        @isset($header)
            <header class="border-b border-emerald-950/5 bg-white/80 backdrop-blur">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>