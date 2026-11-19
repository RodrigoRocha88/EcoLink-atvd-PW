<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'EcoLink') }} — Acesso à Plataforma</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; color: #18342a; }
        h1, h2, h3, .brand { font-family: 'Manrope', sans-serif; }
        .hero-bg {
            background: radial-gradient(ellipse at 80% 15%, rgba(201, 243, 106, .18), transparent 40%),
                        linear-gradient(135deg, #10382c 0%, #195740 58%, #237a57 100%);
        }
        .leaf-pattern {
            background-image: radial-gradient(rgba(255, 255, 255, .10) 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="antialiased">
    <div class="hero-bg leaf-pattern flex min-h-screen flex-col items-center justify-center px-5 py-10">
        <a href="{{ route('home') }}" class="brand flex items-center gap-3 text-2xl font-extrabold tracking-tight text-white">
            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#c9f36a] text-[#123c2f] shadow-lg">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M12 21c-4.5-2.2-7-5.3-7-9.2C5 7.3 8.1 4 12 3c3.9 1 7 4.3 7 8.8 0 3.9-2.5 7-7 9.2Z" stroke="currentColor" stroke-width="1.8"/>
                    <path d="M8.5 15.5c1.2-3.2 3.2-5.4 6.8-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </span>
            EcoLink<span class="text-[#c9f36a]">.</span>
        </a>

        <div class="mt-7 w-full max-w-md rounded-[2rem] border border-white/15 bg-white p-7 shadow-2xl sm:p-9">
            {{ $slot }}
        </div>

        <a href="{{ route('home') }}" class="mt-6 text-sm font-semibold text-white/75 transition hover:text-[#c9f36a]">
            ← Voltar para a página inicial
        </a>
    </div>
</body>
</html>