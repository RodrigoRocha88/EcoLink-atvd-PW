<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EcoLink: Gestão inteligente de resíduos sólidos em condomínios, conectando moradores, síndicos e catadores.">
    <title>EcoLink — Gestão Inteligente de Resíduos em Condomínios</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { scroll-behavior: smooth; }
        body { font-family: 'DM Sans', sans-serif; background-color: #f7f8f1; color: #18342a; }
        h1, h2, h3, .brand { font-family: 'Manrope', sans-serif; }
        .lift { transition: transform .25s ease, box-shadow .25s ease; }
        .lift:hover { transform: translateY(-5px); box-shadow: 0 18px 45px rgba(18, 60, 47, .10); }
    </style>
</head>
<body id="top" class="bg-[#f7f8f1] text-[#18342a] antialiased">

    {{-- TOPO + HERO COM FUNDO VERDE ESCURO GARANTIDO --}}
    <div class="relative overflow-hidden bg-[#123c2f] text-white"
         style="background-color: #123c2f; background-image: radial-gradient(ellipse at 80% 20%, rgba(201,243,106,.18), transparent 40%), linear-gradient(125deg, #10382c 0%, #195740 58%, #237a57 100%);">

        <header class="relative z-20 border-b border-white/10">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 lg:px-8" aria-label="Navegação principal">
                <a href="#" class="brand flex items-center gap-3 text-xl font-extrabold tracking-tight text-white">
                    <span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#c9f36a] text-[#123c2f]" style="background-color: #c9f36a; color: #123c2f;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 21c-4.5-2.2-7-5.3-7-9.2C5 7.3 8.1 4 12 3c3.9 1 7 4.3 7 8.8 0 3.9-2.5 7-7 9.2Z" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M8.5 15.5c1.2-3.2 3.2-5.4 6.8-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <span class="text-white">EcoLink<span class="text-[#c9f36a]" style="color: #c9f36a;">.</span></span>
                </a>

                <div class="hidden items-center gap-7 text-sm font-semibold text-white/90 md:flex">
                    <a class="transition hover:text-[#c9f36a]" href="#como-funciona">Módulos</a>
                    <a class="transition hover:text-[#c9f36a]" href="#educacao-ambiental">Guia de Triagem</a>
                    <a class="transition hover:text-[#c9f36a]" href="#dados-tcc">Coletas</a>
                    <a class="transition hover:text-[#c9f36a]" href="#tecnologias">Arquitetura</a>
                    <a class="transition hover:text-[#c9f36a]" href="#impacto">Impacto</a>
                </div>

                <div class="flex items-center gap-3">
                    @auth
                        <a href="{{ route('dashboard') }}" class="rounded-full bg-[#c9f36a] px-5 py-2.5 text-sm font-extrabold text-[#123c2f] transition hover:brightness-95" style="background-color: #c9f36a; color: #123c2f;">
                            Painel do Síndico
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hidden rounded-full px-4 py-2.5 text-sm font-bold text-white transition hover:bg-white/10 sm:inline-flex">
                            Entrar
                        </a>
                        <a href="{{ route('register') }}" class="rounded-full bg-[#c9f36a] px-5 py-2.5 text-sm font-extrabold text-[#123c2f] transition hover:brightness-95" style="background-color: #c9f36a; color: #123c2f;">
                            Começar <span aria-hidden="true">↗</span>
                        </a>
                    @endauth
                </div>
            </nav>
        </header>

        <section class="relative px-5 pb-20 pt-14 text-white lg:px-8 lg:pb-28 lg:pt-20">
            <div class="mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-[1.05fr_.95fr]">
                <div class="relative z-10">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[.16em] text-white">
                        <span class="h-2 w-2 rounded-full bg-[#c9f36a]" style="background-color: #c9f36a;"></span> Gestão Inteligente de Resíduos
                    </div>
                    <h1 class="max-w-2xl text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-7xl">
                        O futuro é circular. <span class="text-[#c9f36a]" style="color: #c9f36a;">Vamos conectar.</span>
                    </h1>
                    <p class="mt-6 max-w-xl text-base leading-8 text-white/85 sm:text-lg">
                        Plataforma integrada para gestão de resíduos sólidos em condomínios, conectando moradores, síndicos e catadores com foco em logística reversa e economia circular.
                    </p>
                    <div class="mt-9 flex flex-wrap gap-3">
                        <a href="{{ route('register') }}" class="inline-flex items-center gap-3 rounded-full bg-[#c9f36a] px-6 py-4 text-sm font-extrabold text-[#123c2f] shadow-lg transition hover:-translate-y-1" style="background-color: #c9f36a; color: #123c2f;">
                            Acessar painel web <span aria-hidden="true">→</span>
                        </a>
                        <a href="#dados-tcc" class="inline-flex items-center rounded-full border border-white/30 bg-white/5 px-6 py-4 text-sm font-bold text-white transition hover:bg-white/15">
                            Ver coletas registradas
                        </a>
                    </div>
                    <div class="mt-10 flex flex-wrap gap-x-6 gap-y-3 text-sm text-white/85">
                        <span class="flex items-center gap-2"><span class="text-[#c9f36a]" style="color: #c9f36a;">✓</span> Triagem na fonte</span>
                        <span class="flex items-center gap-2"><span class="text-[#c9f36a]" style="color: #c9f36a;">✓</span> Agendamento de coletas</span>
                        <span class="flex items-center gap-2"><span class="text-[#c9f36a]" style="color: #c9f36a;">✓</span> Inclusão produtiva de catadores</span>
                    </div>
                </div>

                <div class="relative mx-auto w-full max-w-xl">
                    <div class="relative rounded-[2rem] border border-white/20 bg-white/10 p-3 shadow-2xl backdrop-blur">
                        <div class="rounded-[1.5rem] bg-white p-5 text-slate-800 sm:p-7">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-widest text-emerald-700">Visão EcoLink</p>
                                    <h2 class="mt-1 text-xl font-extrabold text-[#123c2f]">Seu condomínio, mais verde.</h2>
                                </div>
                                <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#eff9df] text-xl">🌱</span>
                            </div>
                            <div class="mt-6 grid grid-cols-2 gap-3">
                                <div class="rounded-2xl bg-[#f2f7ee] p-4">
                                    <p class="text-xs font-semibold text-slate-500">Coletas organizadas</p>
                                    <p class="mt-2 text-3xl font-extrabold text-[#123c2f]">{{ $totalColetas }}</p>
                                    <p class="mt-1 text-xs text-emerald-700">solicitações no banco</p>
                                </div>
                                <div class="rounded-2xl bg-[#f2f7ee] p-4">
                                    <p class="text-xs font-semibold text-slate-500">Materiais separados</p>
                                    <p class="mt-2 text-3xl font-extrabold text-[#123c2f]">{{ number_format($totalPeso, 1, ',', '.') }} <span class="text-base">kg</span></p>
                                    <p class="mt-1 text-xs text-emerald-700">volume total disponível</p>
                                </div>
                            </div>
                            <div class="mt-4 rounded-2xl border border-slate-100 p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm font-extrabold text-slate-800">{{ $proximaColeta ? $proximaColeta->material : 'Nenhuma coleta pendente' }}</p>
                                        <p class="mt-1 text-xs text-slate-500">{{ $proximaColeta ? $proximaColeta->ponto_coleta . ' · ' . $proximaColeta->condominio : 'Todas as coletas concluídas' }}</p>
                                    </div>
                                    <span class="rounded-full bg-[#eaf7d7] px-3 py-1.5 text-xs font-bold text-[#32613c]">{{ $proximaColeta ? $proximaColeta->status : 'Em dia' }}</span>
                                </div>
                                <div class="mt-4 flex items-center gap-3">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-100">♻️</div>
                                    <div class="flex-1">
                                        <div class="h-2 overflow-hidden rounded-full bg-slate-100">
                                            <div class="h-full w-2/3 rounded-full bg-[#237a57]" style="background-color: #237a57;"></div>
                                        </div>
                                        <p class="mt-2 text-xs text-slate-500">Logística reversa condominial</p>
                                    </div>
                                    <span class="text-xs font-bold text-slate-700">{{ $proximaColeta ? $proximaColeta->data_coleta->format('d/m/Y') : '--/--' }}</span>
                                </div>
                            </div>
                            <p class="mt-4 text-center text-[10px] font-medium text-slate-400">Dados em tempo real conectados ao banco de dados do TCC</p>
                        </div>
                    </div>
                    <div class="absolute -bottom-5 -left-5 hidden rounded-2xl bg-white px-5 py-4 text-slate-800 shadow-xl sm:block">
                        <p class="text-xs font-semibold text-slate-500">Uma rede que conecta</p>
                        <p class="mt-1 font-extrabold text-[#123c2f]">Moradores · Síndicos · Catadores</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <main>
        {{-- FLUXOS E MÓDULOS DO SISTEMA --}}
        <section id="como-funciona" class="px-5 py-20 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <div class="mx-auto max-w-2xl text-center">
                    <p class="text-xs font-extrabold uppercase tracking-[.2em] text-emerald-700">Fluxos e Funcionalidades</p>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-[#123c2f] sm:text-5xl">Três perfis integrados em um único ecossistema.</h2>
                    <p class="mt-5 leading-7 text-slate-600">O EcoLink articula as ações de quem gera, administra e coleta os resíduos para evitar deslocamentos improdutivos.</p>
                </div>
                <div class="mt-14 grid gap-5 md:grid-cols-3">
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#edf7df] text-2xl">🏠</span>
                        <p class="mt-6 text-xs font-extrabold uppercase tracking-widest text-emerald-700">01 · Módulo do Morador (App)</p>
                        <h3 class="mt-2 text-xl font-extrabold text-[#18342a]">Triagem na fonte geradora</h3>
                        <p class="mt-3 leading-7 text-slate-600">Acesso a guias práticos de educação ambiental para separar corretamente plásticos, papéis, metais e vidros no dia a dia.</p>
                    </article>
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#edf7df] text-2xl">🏢</span>
                        <p class="mt-6 text-xs font-extrabold uppercase tracking-widest text-emerald-700">02 · Módulo do Síndico (Web e App)</p>
                        <h3 class="mt-2 text-xl font-extrabold text-[#18342a]">Gestão das solicitações</h3>
                        <p class="mt-3 leading-7 text-slate-600">Painel administrativo seguro em Laravel Breeze para cadastrar demandas, informar tipos de materiais e o volume estimado em kg.</p>
                    </article>
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#edf7df] text-2xl">🚛</span>
                        <p class="mt-6 text-xs font-extrabold uppercase tracking-widest text-emerald-700">03 · Módulo do Catador (App)</p>
                        <h3 class="mt-2 text-xl font-extrabold text-[#18342a]">Previsibilidade logística</h3>
                        <p class="mt-3 leading-7 text-slate-600">Visualização em tempo real de chamados abertos pelos condomínios, aceite de rotas e marcação de conclusão da coleta.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- ORIENTAÇÕES EDUCATIVAS DO MORADOR --}}
        <section id="educacao-ambiental" class="px-5 pb-20 lg:px-8 lg:pb-24">
            <div class="mx-auto grid max-w-7xl gap-12 rounded-[2rem] bg-[#eaf2e3] p-7 sm:p-10 lg:grid-cols-2 lg:items-center lg:p-16">
                <div>
                    <p class="text-xs font-extrabold uppercase tracking-[.2em] text-emerald-800">Educação Ambiental na Prática</p>
                    <h2 class="mt-4 text-3xl font-extrabold leading-tight text-[#123c2f] sm:text-5xl">Orientação clara reduz erros no descarte.</h2>
                    <p class="mt-5 leading-8 text-slate-600">A eficiência da reciclagem depende diretamente da qualidade da separação nos domicílios. O EcoLink reúne os pilares essenciais para apoiar moradores e condomínios.</p>
                    <a href="{{ route('register') }}" class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#123c2f] px-6 py-4 text-sm font-extrabold text-white transition hover:-translate-y-1" style="background-color: #123c2f; color: #ffffff;">
                        Participar da plataforma <span>→</span>
                    </a>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl bg-white p-5 sm:p-6">
                        <span class="text-3xl">🧭</span>
                        <h3 class="mt-4 font-extrabold text-[#18342a]">Como descartar</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">Orientações práticas sobre higienização, acondicionamento e locais corretos de entrega no condomínio.</p>
                    </div>
                    <div class="rounded-3xl bg-white p-5 sm:p-6">
                        <span class="text-3xl">🌎</span>
                        <h3 class="mt-4 font-extrabold text-[#18342a]">Por que reciclar</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">Conscientização sobre a redução de resíduos em aterros sanitários e o impacto socioambiental positivo.</p>
                    </div>
                    <div class="rounded-3xl bg-white p-5 sm:col-span-2 sm:p-6">
                        <span class="text-3xl">♻️</span>
                        <h3 class="mt-4 font-extrabold text-[#18342a]">Triagem dos produtos</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">Guias detalhados para separar corretamente <strong>Plásticos</strong>, <strong>Papéis</strong>, <strong>Metais</strong> e <strong>Vidros</strong>, preservando o valor comercial dos materiais para os catadores.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- SEÇÃO DINÂMICA EXIBINDO TODOS OS DADOS DO BANCO NA PÁGINA INICIAL --}}
        <section id="dados-tcc" class="px-5 pb-20 lg:px-8 lg:pb-24">
            <div class="mx-auto max-w-7xl rounded-[2rem] border border-emerald-950/5 bg-white p-7 shadow-sm sm:p-10">
                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[.2em] text-emerald-700">Base de Dados do TCC · Tempo Real</p>
                        <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-[#123c2f]">Solicitações de Coleta Registradas ({{ $totalColetas }})</h2>
                        <p class="mt-2 text-slate-600">Acompanhe os lotes cadastrados pelos síndicos e disponíveis para retirada pelos recicladores.</p>
                    </div>
                    @auth
                        <a href="{{ route('coletas.index') }}" class="inline-flex w-fit items-center gap-2 rounded-full bg-[#123c2f] px-5 py-3 text-sm font-extrabold text-white" style="background-color: #123c2f; color: #ffffff;">
                            Gerenciar Coletas (CRUD) →
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex w-fit items-center gap-2 rounded-full bg-[#c9f36a] px-5 py-3 text-sm font-extrabold text-[#123c2f]" style="background-color: #c9f36a; color: #123c2f;">
                            Acesso do Síndico →
                        </a>
                    @endauth
                </div>

                <div class="mt-8 overflow-x-auto">
                    <table class="w-full border-collapse text-left text-sm">
                        <thead>
                            <tr class="border-b border-slate-200 text-xs font-extrabold uppercase tracking-wider text-slate-500">
                                <th class="py-3 pr-4">Material</th>
                                <th class="px-4 py-3">Categoria</th>
                                <th class="px-4 py-3">Volume (kg)</th>
                                <th class="px-4 py-3">Condomínio / Ponto</th>
                                <th class="px-4 py-3">Data</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="py-3 pl-4">Observações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($coletas as $coleta)
                                <tr class="hover:bg-slate-50/80">
                                    <td class="py-4 pr-4 font-bold text-slate-800">{{ $coleta->material }}</td>
                                    <td class="px-4 py-4">
                                        <span class="rounded-lg bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-800">{{ $coleta->categoria }}</span>
                                    </td>
                                    <td class="px-4 py-4 font-extrabold text-[#123c2f]">{{ number_format($coleta->peso_kg, 2, ',', '.') }} kg</td>
                                    <td class="px-4 py-4">
                                        <p class="font-semibold text-slate-700">{{ $coleta->condominio }}</p>
                                        <p class="text-xs text-slate-500">{{ $coleta->ponto_coleta }}</p>
                                    </td>
                                    <td class="px-4 py-4 text-slate-600">{{ $coleta->data_coleta->format('d/m/Y') }}</td>
                                    <td class="px-4 py-4">
                                        @php
                                            $badge = match($coleta->status) {
                                                'Concluída' => 'bg-slate-200 text-slate-700',
                                                'Planejada' => 'bg-emerald-100 text-emerald-800',
                                                default => 'bg-amber-100 text-amber-800',
                                            };
                                        @endphp
                                        <span class="rounded-full px-3 py-1 text-xs font-bold {{ $badge }}">{{ $coleta->status }}</span>
                                    </td>
                                    <td class="py-4 pl-4 text-xs text-slate-500">{{ $coleta->observacoes ?? '—' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="py-8 text-center text-slate-500">Nenhuma coleta cadastrada no banco de dados ainda.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        {{-- CAMADAS DA ARQUITETURA E TECNOLOGIAS --}}
        <section id="tecnologias" class="px-5 py-20 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <div class="mx-auto max-w-2xl text-center">
                    <p class="text-xs font-extrabold uppercase tracking-[.2em] text-emerald-700">Arquitetura Híbrida do TCC</p>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-[#123c2f] sm:text-5xl">Camadas e tecnologias do EcoLink</h2>
                    <p class="mt-5 leading-7 text-slate-600">Sistema dividido em camadas desacopladas para atender moradores, síndicos e catadores com segurança e escalabilidade.</p>
                </div>
                <div class="mt-14 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#edf7df] text-2xl">📱</span>
                        <h3 class="mt-6 text-xl font-extrabold text-[#18342a]">Mobile</h3>
                        <p class="mt-2 font-bold text-emerald-800">React Native + TypeScript</p>
                        <p class="mt-3 leading-7 text-slate-600">Aplicativo para moradores e catadores gerenciarem coletas e acessarem orientações de triagem.</p>
                    </article>
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#edf7df] text-2xl">🔗</span>
                        <h3 class="mt-6 text-xl font-extrabold text-[#18342a]">Backend (API)</h3>
                        <p class="mt-2 font-bold text-emerald-800">Node.js + TypeScript</p>
                        <p class="mt-3 leading-7 text-slate-600">API responsável pelo processamento assíncrono de requisições e regras de negócio em tempo real.</p>
                    </article>
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#edf7df] text-2xl">💻</span>
                        <h3 class="mt-6 text-xl font-extrabold text-[#18342a]">Web (Gestão)</h3>
                        <p class="mt-2 font-bold text-emerald-800">Laravel + Laravel Breeze</p>
                        <p class="mt-3 leading-7 text-slate-600">Painel administrativo seguro com padrão MVC para síndicos gerenciarem as solicitações.</p>
                    </article>
                    <article class="lift rounded-3xl border border-emerald-950/5 bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#edf7df] text-2xl">🗄️</span>
                        <h3 class="mt-6 text-xl font-extrabold text-[#18342a]">Banco de Dados</h3>
                        <p class="mt-2 font-bold text-emerald-800">MySQL</p>
                        <p class="mt-3 leading-7 text-slate-600">Armazenamento estruturado de cadastros, solicitações de coleta e histórico da plataforma.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- FUNDAMENTAÇÃO LEGAL E IMPACTO SOCIOAMBIENTAL --}}
        <section id="impacto" class="bg-[#123c2f] px-5 py-20 text-white lg:px-8 lg:py-24" style="background-color: #123c2f;">
            <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-[.8fr_1.2fr] md:items-center">
                <div>
                    <p class="text-xs font-extrabold uppercase tracking-[.2em] text-[#c9f36a]" style="color: #c9f36a;">Fundamentação e Propósito</p>
                    <h2 class="mt-4 text-3xl font-extrabold leading-tight text-white sm:text-5xl">Alinhado à Política Nacional de Resíduos Sólidos.</h2>
                </div>
                <div>
                    <p class="text-lg leading-8 text-white/85">Inspirado nas diretrizes da <strong class="text-white">Lei nº 12.305/10 (PNRS)</strong>, o EcoLink fortalece a responsabilidade compartilhada pelo ciclo de vida dos produtos, otimizando a logística reversa em escala condominial e promovendo a inclusão social e produtiva dos catadores de materiais recicláveis.</p>
                    <div class="mt-7 flex flex-wrap gap-3">
                        <span class="rounded-full border border-white/25 bg-white/10 px-4 py-2 text-sm text-white">Política Nacional de Resíduos Sólidos</span>
                        <span class="rounded-full border border-white/25 bg-white/10 px-4 py-2 text-sm text-white">Logística reversa local</span>
                        <span class="rounded-full border border-white/25 bg-white/10 px-4 py-2 text-sm text-white">Inclusão produtiva</span>
                        <span class="rounded-full border border-white/25 bg-white/10 px-4 py-2 text-sm text-white">Economia circular</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-5 py-20 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-5xl rounded-[2rem] bg-[#c9f36a] px-7 py-12 text-center sm:px-14 sm:py-16" style="background-color: #c9f36a;">
                <p class="text-xs font-extrabold uppercase tracking-[.2em] text-[#32613c]">Fatec Zona Leste · EnGeTec</p>
                <h2 class="mx-auto mt-4 max-w-3xl text-3xl font-extrabold leading-tight text-[#123c2f] sm:text-5xl">Vamos transformar a gestão de resíduos nos condomínios?</h2>
                <p class="mx-auto mt-5 max-w-2xl leading-7 text-[#355544]">Acesse o painel administrativo do EcoLink para registrar coletas e acompanhar os indicadores do projeto.</p>
                <a href="{{ route('register') }}" class="mt-8 inline-flex rounded-full bg-[#123c2f] px-7 py-4 text-sm font-extrabold text-white transition hover:-translate-y-1" style="background-color: #123c2f; color: #ffffff;">
                    Acessar a plataforma <span class="ml-3">→</span>
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-[#0b2b21] px-5 py-8 text-white lg:px-8" style="background-color: #0b2b21;">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-5 sm:flex-row sm:items-center">
            <a href="#" class="brand flex items-center gap-2 text-lg font-extrabold text-white">EcoLink<span class="text-[#c9f36a]" style="color: #c9f36a;">.</span></a>
            <p class="text-sm text-white/70">EcoLink · Gestão Inteligente de Resíduos em Condomínios · 2026</p>
            <a href="#top" class="text-sm font-bold text-white/90 hover:text-white">Voltar ao topo ↑</a>
        </div>
    </footer>
</body>
</html>