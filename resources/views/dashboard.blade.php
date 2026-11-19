<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-xs font-extrabold uppercase tracking-[.18em] text-[#237a57]">Painel EcoLink</p>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-[#123c2f]">Olá, {{ Auth::user()->name }} 🌱</h2>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <a href="{{ route('coletas.index') }}" class="inline-flex items-center rounded-full border border-emerald-950/15 bg-white px-5 py-2.5 text-xs font-extrabold text-[#123c2f] transition hover:bg-emerald-50">
                    Gerenciar CRUD Completo
                </a>
                <a href="{{ route('coletas.create') }}" class="inline-flex items-center rounded-full bg-[#123c2f] px-5 py-2.5 text-xs font-extrabold text-[#c9f36a] shadow-sm transition hover:-translate-y-0.5 hover:bg-[#195740]">
                    + Nova Coleta
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl space-y-8 px-4 sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-bold text-emerald-900">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm font-bold text-red-900">
                    ✕ {{ session('error') }}
                </div>
            @endif

            <section class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-[#10382c] via-[#195740] to-[#237a57] p-7 text-white shadow-lg sm:p-10">
                <div class="grid gap-8 md:grid-cols-[1.3fr_.7fr] md:items-center">
                    <div>
                        <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3.5 py-1 text-xs font-bold uppercase tracking-[.18em] text-[#c9f36a]">
                            Economia circular ativa
                        </span>
                        <h3 class="mt-4 max-w-2xl text-3xl font-extrabold leading-tight sm:text-4xl">Organize o descarte. Conecte pessoas. Gere impacto.</h3>
                        <p class="mt-4 max-w-2xl leading-7 text-white/75">Acompanhe em tempo real todos os resíduos separados, pontos de coleta ativos e indicadores cadastrados no sistema EcoLink.</p>
                    </div>
                    <div class="rounded-3xl border border-white/15 bg-white/10 p-6 backdrop-blur">
                        <p class="text-xs font-bold uppercase tracking-widest text-[#c9f36a]">Ação Rápida</p>
                        <p class="mt-2 text-xl font-extrabold">Controle de Coletas</p>
                        <p class="mt-2 text-sm leading-6 text-white/75">Adicione novos registros de materiais recicláveis ou atualize o status das coletas em andamento.</p>
                        <a href="{{ route('coletas.create') }}" class="mt-5 inline-flex items-center gap-2 rounded-full bg-[#c9f36a] px-5 py-3 text-sm font-extrabold text-[#123c2f] transition hover:-translate-y-0.5">
                            Cadastrar coleta <span>→</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="rounded-3xl border border-emerald-950/5 bg-white p-6 shadow-sm transition hover:-translate-y-1">
                    <div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Total de coletas</p><span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#eff9df] text-lg">🚚</span></div>
                    <p class="mt-4 text-3xl font-extrabold text-[#123c2f]">{{ $totalColetas }}</p>
                    <p class="mt-2 text-xs font-semibold text-[#237a57]">Registros no banco</p>
                </article>
                <article class="rounded-3xl border border-emerald-950/5 bg-white p-6 shadow-sm transition hover:-translate-y-1">
                    <div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Materiais separados</p><span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#eff9df] text-lg">♻️</span></div>
                    <p class="mt-4 text-3xl font-extrabold text-[#123c2f]">{{ number_format($totalPeso, 2, ',', '.') }} <span class="text-lg">kg</span></p>
                    <p class="mt-2 text-xs font-semibold text-[#237a57]">Volume total acumulado</p>
                </article>
                <article class="rounded-3xl border border-emerald-950/5 bg-white p-6 shadow-sm transition hover:-translate-y-1">
                    <div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Aguardando coleta</p><span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-amber-50 text-lg">📋</span></div>
                    <p class="mt-4 text-3xl font-extrabold text-[#123c2f]">{{ str_pad($solicitacoesAbertas, 2, '0', STR_PAD_LEFT) }}</p>
                    <p class="mt-2 text-xs font-semibold text-amber-700">Solicitações abertas</p>
                </article>
                <article class="rounded-3xl border border-emerald-950/5 bg-white p-6 shadow-sm transition hover:-translate-y-1">
                    <div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Coletas concluídas</p><span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#eff9df] text-lg">🌿</span></div>
                    <p class="mt-4 text-3xl font-extrabold text-[#123c2f]">{{ str_pad($coletasConcluidas, 2, '0', STR_PAD_LEFT) }}</p>
                    <p class="mt-2 text-xs font-semibold text-[#237a57]">Ciclos finalizados</p>
                </article>
            </section>

            <section class="grid gap-6 lg:grid-cols-[1.35fr_.65fr]">
                <div class="rounded-[2rem] border border-emerald-950/5 bg-white p-6 shadow-sm sm:p-8">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <p class="text-xs font-extrabold uppercase tracking-[.16em] text-[#237a57]">Base de Dados do TCC</p>
                            <h3 class="mt-1.5 text-xl font-extrabold text-[#123c2f]">Coletas Cadastradas ({{ $totalColetas }})</h3>
                        </div>
                        <a href="{{ route('coletas.create') }}" class="rounded-full bg-[#eff9df] px-4 py-2 text-xs font-extrabold text-[#123c2f] transition hover:bg-[#c9f36a]">+ Adicionar registro</a>
                    </div>

                    <div class="mt-6 space-y-3.5">
                        @forelse($coletas as $coleta)
                            @php
                                $badge = match($coleta->status) {
                                    'Concluída' => 'bg-slate-200 text-slate-700',
                                    'Planejada' => 'bg-[#eaf7d7] text-[#32613c]',
                                    default => 'bg-amber-100 text-amber-800',
                                };
                            @endphp
                            <div class="flex flex-col justify-between gap-4 rounded-2xl border border-emerald-950/5 bg-[#f7f8f1]/80 p-4 transition hover:bg-[#f2f7ee] sm:flex-row sm:items-center">
                                <div class="flex items-start gap-4">
                                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#eff9df] text-xl">♻️</span>
                                    <div>
                                        <div class="flex flex-wrap items-center gap-2">
                                            <p class="font-extrabold text-[#18342a]">{{ $coleta->material }}</p>
                                            <span class="rounded-lg bg-white px-2.5 py-0.5 text-xs font-bold text-[#237a57] shadow-2xs">{{ $coleta->categoria }}</span>
                                            <span class="rounded-full px-3 py-0.5 text-xs font-bold {{ $badge }}">{{ $coleta->status }}</span>
                                        </div>
                                        <p class="mt-1 text-sm text-slate-600">{{ $coleta->condominio }} · {{ $coleta->ponto_coleta }}</p>
                                        <p class="mt-1 text-xs text-slate-500">Peso: <strong class="text-[#123c2f]">{{ number_format($coleta->peso_kg, 2, ',', '.') }} kg</strong> · Data: {{ $coleta->data_coleta->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 self-end sm:self-center">
                                    <a href="{{ route('coletas.edit', $coleta) }}" class="rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-xs font-bold text-slate-700 transition hover:border-[#123c2f] hover:text-[#123c2f]">Editar</a>
                                    <form action="{{ route('coletas.destroy', $coleta) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir esta coleta?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-full bg-red-50 px-3.5 py-1.5 text-xs font-bold text-red-700 transition hover:bg-red-100">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <p class="py-8 text-center text-sm text-slate-500">Nenhuma coleta encontrada no banco de dados.</p>
                        @endforelse
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="rounded-[2rem] border border-emerald-950/5 bg-white p-6 shadow-sm sm:p-7">
                        <p class="text-xs font-extrabold uppercase tracking-[.16em] text-[#237a57]">Guia rápido</p>
                        <h3 class="mt-2 text-xl font-extrabold text-[#123c2f]">Antes de descartar</h3>
                        <ul class="mt-5 space-y-4 text-sm leading-6 text-slate-600">
                            <li class="flex gap-3"><span class="font-extrabold text-[#237a57]">01</span><span>Separe os materiais recicláveis dos resíduos orgânicos.</span></li>
                            <li class="flex gap-3"><span class="font-extrabold text-[#237a57]">02</span><span>Esvazie embalagens e, quando possível, remova o excesso de resíduos.</span></li>
                            <li class="flex gap-3"><span class="font-extrabold text-[#237a57]">03</span><span>Confira as regras e os pontos de coleta da sua região.</span></li>
                        </ul>
                    </div>
                    <div class="rounded-[2rem] bg-[#eaf2e3] p-6 sm:p-7">
                        <span class="text-2xl">💚</span>
                        <h3 class="mt-3 text-lg font-extrabold text-[#123c2f]">Cada material conta</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">A reciclagem funciona melhor quando a comunidade participa. Compartilhe informação e ajude a criar uma rotina sustentável.</p>
                        <a href="{{ route('home') }}#dados-tcc" class="mt-4 inline-flex text-sm font-extrabold text-[#123c2f] hover:underline">Ver página pública →</a>
                    </div>
                </div>
            </section>
            <p class="pb-4 text-center text-xs text-slate-400">EcoLink · Técnico em Desenvolvimento de Sistemas · 2026</p>
        </div>
    </div>
</x-app-layout>