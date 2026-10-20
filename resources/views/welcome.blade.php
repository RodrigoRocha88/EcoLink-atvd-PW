<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EcoLink conecta condomínios, moradores e profissionais da reciclagem para tornar a gestão de resíduos mais simples e sustentável.">
    <title>EcoLink — Reciclar conecta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{--forest:#123c2f;--green:#237a57;--lime:#c9f36a;--cream:#f7f8f1;--ink:#18342a}
        *{scroll-behavior:smooth}
        body{font-family:'DM Sans',sans-serif;background:var(--cream);color:var(--ink)}
        h1,h2,h3,.brand{font-family:'Manrope',sans-serif}
        .hero-bg{background:radial-gradient(ellipse at 80% 20%,rgba(201,243,106,.20),transparent 35%),linear-gradient(125deg,#10382c 0%,#195740 58%,#237a57 100%)}
        .leaf-pattern{background-image:radial-gradient(rgba(255,255,255,.10) 1px,transparent 1px);background-size:20px 20px}
        .lift{transition:transform .25s ease,box-shadow .25s ease}
        .lift:hover{transform:translateY(-5px);box-shadow:0 18px 45px rgba(18,60,47,.10)}
        .pill{border:1px solid rgba(255,255,255,.25);background:rgba(255,255,255,.08)}
    </style>
</head>
<body class="antialiased">
    <header class="absolute inset-x-0 top-0 z-20">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 lg:px-8" aria-label="Navegação principal">
            <a href="#" class="brand flex items-center gap-3 text-xl font-extrabold tracking-tight text-white">
                <span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-lime-300 text-forest" style="background:var(--lime);color:var(--forest)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 21c-4.5-2.2-7-5.3-7-9.2C5 7.3 8.1 4 12 3c3.9 1 7 4.3 7 8.8 0 3.9-2.5 7-7 9.2Z" stroke="currentColor" stroke-width="1.8"/><path d="M8.5 15.5c1.2-3.2 3.2-5.4 6.8-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                </span>
                EcoLink<span class="text-lime-300" style="color:var(--lime)">.</span>
            </a>
            <div class="hidden items-center gap-8 text-sm font-semibold text-white/80 md:flex">
                <a class="hover:text-white" href="#como-funciona">Como funciona</a>
                <a class="hover:text-white" href="#beneficios">Benefícios</a>
                <a class="hover:text-white" href="#impacto">Impacto</a>
            </div>
            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded-full px-5 py-2.5 text-sm font-bold" style="background:var(--lime);color:var(--forest)">Acessar painel</a>
                @else
                    <a href="{{ route('login') }}" class="hidden rounded-full px-4 py-2.5 text-sm font-bold text-white hover:bg-white/10 sm:inline-flex">Entrar</a>
                    <a href="{{ route('register') }}" class="rounded-full px-5 py-2.5 text-sm font-bold" style="background:var(--lime);color:var(--forest)">Começar <span aria-hidden="true">↗</span></a>
                @endauth
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-bg leaf-pattern relative overflow-hidden px-5 pb-20 pt-32 text-white lg:px-8 lg:pb-28 lg:pt-44">
            <div class="mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-[1.05fr_.95fr]">
                <div class="relative z-10">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-bold uppercase tracking-[.16em] pill">
                        <span class="h-2 w-2 rounded-full" style="background:var(--lime)"></span> Sustentabilidade em movimento
                    </div>
                    <h1 class="max-w-2xl text-4xl font-extrabold leading-[1.08] tracking-tight sm:text-5xl lg:text-7xl">O futuro é circular. <span style="color:var(--lime)">Vamos conectar.</span></h1>
                    <p class="mt-6 max-w-xl text-base leading-8 text-white/75 sm:text-lg">Uma forma mais inteligente de organizar resíduos, aproximar condomínios de profissionais da reciclagem e transformar pequenas atitudes em impacto real.</p>
                    <div class="mt-9 flex flex-wrap gap-3">
                        <a href="{{ route('register') }}" class="inline-flex items-center gap-3 rounded-full px-6 py-4 text-sm font-extrabold shadow-lg transition hover:-translate-y-1" style="background:var(--lime);color:var(--forest)">Conheça a plataforma <span aria-hidden="true">→</span></a>
                        <a href="#como-funciona" class="inline-flex items-center rounded-full border border-white/25 px-6 py-4 text-sm font-bold text-white transition hover:bg-white/10">Como funciona</a>
                    </div>
                    <div class="mt-10 flex flex-wrap gap-x-6 gap-y-3 text-sm text-white/70">
                        <span class="flex items-center gap-2"><span style="color:var(--lime)">✓</span> Descarte consciente</span>
                        <span class="flex items-center gap-2"><span style="color:var(--lime)">✓</span> Coletas organizadas</span>
                        <span class="flex items-center gap-2"><span style="color:var(--lime)">✓</span> Conexão local</span>
                    </div>
                </div>

                <div class="relative mx-auto w-full max-w-xl">
                    <div class="absolute -right-5 -top-8 h-40 w-40 rounded-full blur-3xl" style="background:rgba(201,243,106,.18)"></div>
                    <div class="relative rounded-[2rem] border border-white/15 bg-white/10 p-3 shadow-2xl backdrop-blur">
                        <div class="rounded-[1.5rem] bg-white p-5 text-slate-800 sm:p-7">
                            <div class="flex items-center justify-between">
                                <div><p class="text-xs font-bold uppercase tracking-widest text-emerald-700">Visão EcoLink</p><h2 class="mt-1 text-xl font-extrabold">Seu condomínio, mais verde.</h2></div>
                                <span class="flex h-11 w-11 items-center justify-center rounded-2xl text-xl" style="background:#eff9df">🌱</span>
                            </div>
                            <div class="mt-6 grid grid-cols-2 gap-3">
                                <div class="rounded-2xl p-4" style="background:#f2f7ee"><p class="text-xs font-semibold text-slate-500">Coletas organizadas</p><p class="mt-2 text-3xl font-extrabold" style="color:var(--forest)">24</p><p class="mt-1 text-xs text-emerald-700">neste mês</p></div>
                                <div class="rounded-2xl p-4" style="background:#f2f7ee"><p class="text-xs font-semibold text-slate-500">Materiais separados</p><p class="mt-2 text-3xl font-extrabold" style="color:var(--forest)">86 <span class="text-base">kg</span></p><p class="mt-1 text-xs text-emerald-700">exemplo demonstrativo</p></div>
                            </div>
                            <div class="mt-4 rounded-2xl border border-slate-100 p-4">
                                <div class="flex items-center justify-between"><div><p class="text-sm font-extrabold">Próxima coleta</p><p class="mt-1 text-xs text-slate-500">Recicláveis secos · Área comum</p></div><span class="rounded-full px-3 py-1.5 text-xs font-bold" style="background:#eaf7d7;color:#32613c">Agendada</span></div>
                                <div class="mt-4 flex items-center gap-3"><div class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-100">♻️</div><div class="flex-1"><div class="h-2 overflow-hidden rounded-full bg-slate-100"><div class="h-full w-2/3 rounded-full" style="background:var(--green)"></div></div><p class="mt-2 text-xs text-slate-500">Organização da coleta</p></div><span class="text-xs font-bold">2ª feira</span></div>
                            </div>
                            <p class="mt-4 text-center text-[10px] font-medium text-slate-400">Prévia ilustrativa da plataforma · dados fictícios</p>
                        </div>
                    </div>
                    <div class="absolute -bottom-5 -left-5 hidden rounded-2xl bg-white px-5 py-4 text-slate-800 shadow-xl sm:block"><p class="text-xs font-semibold text-slate-500">Uma rede que conecta</p><p class="mt-1 font-extrabold">Moradores · Síndicos · Recicladores</p></div>
                </div>
            </div>
        </section>

        <section id="como-funciona" class="px-5 py-20 lg:px-8 lg:py-28">
            <div class="mx-auto max-w-7xl">
                <div class="mx-auto max-w-2xl text-center"><p class="text-xs font-extrabold uppercase tracking-[.2em] text-emerald-700">Simples por natureza</p><h2 class="mt-4 text-3xl font-extrabold tracking-tight sm:text-5xl">Reciclar fica mais fácil quando todo mundo se conecta.</h2><p class="mt-5 leading-7 text-slate-600">O EcoLink organiza as etapas do descarte para que a informação chegue às pessoas certas, na hora certa.</p></div>
                <div class="mt-14 grid gap-5 md:grid-cols-3">
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7"><span class="flex h-12 w-12 items-center justify-center rounded-2xl text-2xl" style="background:#edf7df">🏠</span><p class="mt-6 text-xs font-extrabold uppercase tracking-widest text-emerald-700">01 · Organize</p><h3 class="mt-2 text-xl font-extrabold">O condomínio participa</h3><p class="mt-3 leading-7 text-slate-600">Moradores e síndicos encontram informações claras para separar materiais e organizar a demanda de coleta.</p></article>
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7"><span class="flex h-12 w-12 items-center justify-center rounded-2xl text-2xl" style="background:#edf7df">🔄</span><p class="mt-6 text-xs font-extrabold uppercase tracking-widest text-emerald-700">02 · Conecte</p><h3 class="mt-2 text-xl font-extrabold">A coleta ganha direção</h3><p class="mt-3 leading-7 text-slate-600">A proposta aproxima os pontos de descarte dos profissionais da reciclagem, facilitando a comunicação e o planejamento.</p></article>
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7"><span class="flex h-12 w-12 items-center justify-center rounded-2xl text-2xl" style="background:#edf7df">🌎</span><p class="mt-6 text-xs font-extrabold uppercase tracking-widest text-emerald-700">03 · Transforme</p><h3 class="mt-2 text-xl font-extrabold">O impacto aparece</h3><p class="mt-3 leading-7 text-slate-600">Indicadores podem ajudar a acompanhar as coletas e incentivar hábitos mais sustentáveis no dia a dia.</p></article>
                </div>
            </div>
        </section>

        <section id="beneficios" class="px-5 pb-20 lg:px-8 lg:pb-28">
            <div class="mx-auto grid max-w-7xl gap-12 rounded-[2rem] p-7 sm:p-10 lg:grid-cols-2 lg:items-center lg:p-16" style="background:#eaf2e3">
                <div><p class="text-xs font-extrabold uppercase tracking-[.2em] text-emerald-800">Tecnologia com propósito</p><h2 class="mt-4 text-3xl font-extrabold leading-tight sm:text-5xl">Menos desencontro. Mais reaproveitamento.</h2><p class="mt-5 leading-8 text-slate-600">Quando a orientação é acessível e a comunicação funciona, fica mais fácil criar uma rotina de descarte responsável. O EcoLink foi pensado para apoiar essa mudança coletiva.</p><a href="{{ route('register') }}" class="mt-8 inline-flex items-center gap-3 rounded-full px-6 py-4 text-sm font-extrabold text-white transition hover:-translate-y-1" style="background:var(--forest)">Explorar a proposta <span>→</span></a></div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-3xl bg-white p-5 sm:p-7"><span class="text-3xl">🧭</span><h3 class="mt-5 font-extrabold">Mais organização</h3><p class="mt-2 text-sm leading-6 text-slate-600">Informações de coleta reunidas em um só lugar.</p></div>
                    <div class="mt-8 rounded-3xl bg-white p-5 sm:p-7"><span class="text-3xl">📚</span><h3 class="mt-5 font-extrabold">Mais orientação</h3><p class="mt-2 text-sm leading-6 text-slate-600">Conteúdo para apoiar a separação correta dos resíduos.</p></div>
                    <div class="rounded-3xl bg-white p-5 sm:p-7"><span class="text-3xl">🤝</span><h3 class="mt-5 font-extrabold">Mais conexão</h3><p class="mt-2 text-sm leading-6 text-slate-600">Aproximação entre condomínios e recicladores.</p></div>
                    <div class="mt-8 rounded-3xl bg-white p-5 sm:p-7"><span class="text-3xl">📈</span><h3 class="mt-5 font-extrabold">Mais visibilidade</h3><p class="mt-2 text-sm leading-6 text-slate-600">Indicadores para acompanhar a evolução das ações.</p></div>
                </div>
            </div>
        </section>

        <section id="impacto" class="px-5 py-20 text-white lg:px-8 lg:py-24" style="background:var(--forest)">
            <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-[.8fr_1.2fr] md:items-center">
                <div><p class="text-xs font-extrabold uppercase tracking-[.2em]" style="color:var(--lime)">Nosso propósito</p><h2 class="mt-4 text-3xl font-extrabold leading-tight sm:text-5xl">Uma mudança local pode inspirar um futuro melhor.</h2></div>
                <div><p class="text-lg leading-8 text-white/75">O EcoLink é um projeto acadêmico que propõe usar tecnologia para melhorar a gestão de resíduos em ambientes residenciais. A ideia é tornar a reciclagem mais organizada, acessível e colaborativa, valorizando também o trabalho dos profissionais que fazem a economia circular acontecer.</p><div class="mt-7 flex flex-wrap gap-3"><span class="rounded-full px-4 py-2 text-sm pill">Economia circular</span><span class="rounded-full px-4 py-2 text-sm pill">Educação ambiental</span><span class="rounded-full px-4 py-2 text-sm pill">Inclusão produtiva</span></div></div>
            </div>
        </section>

        <section class="px-5 py-20 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-5xl rounded-[2rem] px-7 py-12 text-center sm:px-14 sm:py-16" style="background:var(--lime)">
                <p class="text-xs font-extrabold uppercase tracking-[.2em]" style="color:#32613c">O próximo passo começa aqui</p>
                <h2 class="mx-auto mt-4 max-w-3xl text-3xl font-extrabold leading-tight sm:text-5xl" style="color:var(--forest)">Vamos transformar a forma como nos relacionamos com os resíduos?</h2>
                <p class="mx-auto mt-5 max-w-2xl leading-7" style="color:#355544">Conheça a proposta do EcoLink e acompanhe a construção de uma gestão de resíduos mais integrada.</p>
                <a href="{{ route('register') }}" class="mt-8 inline-flex rounded-full px-7 py-4 text-sm font-extrabold text-white transition hover:-translate-y-1" style="background:var(--forest)">Acessar a plataforma <span class="ml-3">→</span></a>
            </div>
        </section>
    </main>

    <footer class="px-5 py-8 text-white lg:px-8" style="background:#0b2b21">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-5 sm:flex-row sm:items-center">
            <a href="#" class="brand flex items-center gap-2 text-lg font-extrabold">EcoLink<span style="color:var(--lime)">.</span></a>
            <p class="text-sm text-white/60">Projeto acadêmico · Técnico em Desenvolvimento de Sistemas · 2026</p>
            <a href="#top" class="text-sm font-bold text-white/80 hover:text-white">Voltar ao topo ↑</a>
        </div>
    </footer>
</body>
</html>
