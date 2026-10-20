<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-1 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-[.18em] text-emerald-700">Painel EcoLink</p>
                <h2 class="mt-1 text-2xl font-extrabold text-slate-800">Olá, {{ Auth::user()->name }} 🌱</h2>
            </div>
            <span class="mt-3 inline-flex w-fit items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-xs font-bold text-emerald-800 sm:mt-0"><span class="h-2 w-2 rounded-full bg-emerald-500"></span> Ambiente de demonstração</span>
        </div>
    </x-slot>

    <div class="min-h-screen bg-[#f5f7f0] py-8">
        <div class="mx-auto max-w-7xl space-y-8 px-4 sm:px-6 lg:px-8">
            <section class="overflow-hidden rounded-3xl bg-[#123c2f] p-7 text-white sm:p-10">
                <div class="grid gap-8 md:grid-cols-[1.3fr_.7fr] md:items-center">
                    <div><p class="text-xs font-bold uppercase tracking-[.2em] text-lime-300">Pequenas atitudes, grandes ciclos</p><h3 class="mt-3 max-w-2xl text-3xl font-extrabold leading-tight sm:text-4xl">Organize o descarte. Conecte pessoas. Gere impacto.</h3><p class="mt-4 max-w-2xl leading-7 text-white/70">Este painel apresenta uma prévia das áreas que podem compor a plataforma EcoLink. Os números e registros abaixo são demonstrativos.</p></div>
                    <div class="rounded-2xl border border-white/10 bg-white/10 p-5"><p class="text-sm text-white/70">Seu próximo passo</p><p class="mt-2 text-xl font-extrabold">Conheça as boas práticas</p><p class="mt-2 text-sm leading-6 text-white/70">Confira as orientações para separar materiais recicláveis com mais segurança.</p><a href="{{ route('home') }}#beneficios" class="mt-4 inline-flex rounded-full bg-lime-300 px-5 py-3 text-sm font-extrabold text-[#123c2f]">Ver orientações →</a></div>
                </div>
            </section>

            <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="rounded-2xl border border-slate-100 bg-white p-6 shadow-sm"><div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Coletas no mês</p><span class="text-xl">🚚</span></div><p class="mt-4 text-3xl font-extrabold text-[#123c2f]">24</p><p class="mt-2 text-xs text-slate-400">Número ilustrativo</p></article>
                <article class="rounded-2xl border border-slate-100 bg-white p-6 shadow-sm"><div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Materiais separados</p><span class="text-xl">♻️</span></div><p class="mt-4 text-3xl font-extrabold text-[#123c2f]">86 kg</p><p class="mt-2 text-xs text-slate-400">Número ilustrativo</p></article>
                <article class="rounded-2xl border border-slate-100 bg-white p-6 shadow-sm"><div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Solicitações abertas</p><span class="text-xl">📋</span></div><p class="mt-4 text-3xl font-extrabold text-[#123c2f]">05</p><p class="mt-2 text-xs text-slate-400">Número ilustrativo</p></article>
                <article class="rounded-2xl border border-slate-100 bg-white p-6 shadow-sm"><div class="flex items-center justify-between"><p class="text-sm font-semibold text-slate-500">Conteúdos disponíveis</p><span class="text-xl">🌿</span></div><p class="mt-4 text-3xl font-extrabold text-[#123c2f]">12</p><p class="mt-2 text-xs text-slate-400">Exemplo de conteúdo</p></article>
            </section>

            <section class="grid gap-6 lg:grid-cols-[1.2fr_.8fr]">
                <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm sm:p-8">
                    <div class="flex items-center justify-between gap-4"><div><p class="text-xs font-bold uppercase tracking-[.16em] text-emerald-700">Visão geral</p><h3 class="mt-2 text-xl font-extrabold text-slate-800">Atividade recente</h3></div><span class="rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-500">Exemplo</span></div>
                    <div class="mt-6 space-y-4">
                        <div class="flex items-start gap-4 rounded-2xl bg-slate-50 p-4"><span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-xl">📦</span><div class="min-w-0 flex-1"><div class="flex flex-wrap items-center justify-between gap-2"><p class="font-bold text-slate-800">Recicláveis secos</p><span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-800">Aguardando</span></div><p class="mt-1 text-sm text-slate-500">Área comum · Condomínio demonstrativo</p><p class="mt-2 text-xs text-slate-400">Solicitação ilustrativa</p></div></div>
                        <div class="flex items-start gap-4 rounded-2xl bg-slate-50 p-4"><span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-xl">🧴</span><div class="min-w-0 flex-1"><div class="flex flex-wrap items-center justify-between gap-2"><p class="font-bold text-slate-800">Plásticos e embalagens</p><span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-800">Planejada</span></div><p class="mt-1 text-sm text-slate-500">Ponto de coleta · Condomínio demonstrativo</p><p class="mt-2 text-xs text-slate-400">Solicitação ilustrativa</p></div></div>
                        <div class="flex items-start gap-4 rounded-2xl bg-slate-50 p-4"><span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-100 text-xl">📄</span><div class="min-w-0 flex-1"><div class="flex flex-wrap items-center justify-between gap-2"><p class="font-bold text-slate-800">Papel e papelão</p><span class="rounded-full bg-slate-200 px-3 py-1 text-xs font-bold text-slate-600">Concluída</span></div><p class="mt-1 text-sm text-slate-500">Área de reciclagem · Condomínio demonstrativo</p><p class="mt-2 text-xs text-slate-400">Solicitação ilustrativa</p></div></div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm sm:p-7"><p class="text-xs font-bold uppercase tracking-[.16em] text-emerald-700">Guia rápido</p><h3 class="mt-2 text-xl font-extrabold text-slate-800">Antes de descartar</h3><ul class="mt-5 space-y-4 text-sm leading-6 text-slate-600"><li class="flex gap-3"><span class="font-extrabold text-emerald-700">01</span><span>Separe os materiais recicláveis dos resíduos orgânicos.</span></li><li class="flex gap-3"><span class="font-extrabold text-emerald-700">02</span><span>Esvazie embalagens e, quando possível, remova o excesso de resíduos.</span></li><li class="flex gap-3"><span class="font-extrabold text-emerald-700">03</span><span>Confira as regras e os pontos de coleta da sua região.</span></li></ul></div>
                    <div class="rounded-3xl p-6 sm:p-7" style="background:#e5f2d5"><span class="text-2xl">💚</span><h3 class="mt-3 text-lg font-extrabold text-[#123c2f]">Cada material conta</h3><p class="mt-2 text-sm leading-6 text-slate-600">A reciclagem funciona melhor quando a comunidade participa. Compartilhe informação e ajude a criar uma rotina sustentável.</p><a href="{{ route('home') }}#como-funciona" class="mt-4 inline-flex text-sm font-extrabold text-emerald-900 hover:underline">Conhecer o EcoLink →</a></div>
                </div>
            </section>
            <p class="pb-4 text-center text-xs text-slate-400">EcoLink · Protótipo acadêmico para demonstração. Os indicadores e registros exibidos são fictícios.</p>
        </div>
    </div>
</x-app-layout>
