<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[.18em] text-emerald-700">CRUD EcoLink</p>
                <h2 class="mt-1 text-2xl font-extrabold text-slate-800">Gerenciamento de Coletas Seletivas</h2>
            </div>
            <a href="{{ route('coletas.create') }}" class="rounded-full bg-[#123c2f] px-5 py-2.5 text-sm font-extrabold text-lime-300 hover:bg-[#195740]">
                + Cadastrar Nova Coleta
            </a>
        </div>
    </x-slot>

    <div class="min-h-screen bg-[#f5f7f0] py-8">
        <div class="mx-auto max-w-7xl space-y-6 px-4 sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-bold text-emerald-900">
                    ✓ {{ session('success') }}
                </div>
            @endif

            <div class="overflow-hidden rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-left text-sm">
                        <thead>
                            <tr class="border-b border-slate-200 text-xs font-extrabold uppercase tracking-wider text-slate-500">
                                <th class="py-3 pr-4">ID</th>
                                <th class="px-4 py-3">Material</th>
                                <th class="px-4 py-3">Categoria</th>
                                <th class="px-4 py-3">Peso</th>
                                <th class="px-4 py-3">Condomínio / Ponto</th>
                                <th class="px-4 py-3">Data</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="py-3 pl-4 text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($coletas as $coleta)
                                <tr class="hover:bg-slate-50">
                                    <td class="py-4 pr-4 font-bold text-slate-400">#{{ $coleta->id }}</td>
                                    <td class="px-4 py-4 font-bold text-slate-800">{{ $coleta->material }}</td>
                                    <td class="px-4 py-4"><span class="rounded-lg bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-800">{{ $coleta->categoria }}</span></td>
                                    <td class="px-4 py-4 font-extrabold text-[#123c2f]">{{ number_format($coleta->peso_kg, 2, ',', '.') }} kg</td>
                                    <td class="px-4 py-4">
                                        <p class="font-semibold text-slate-700">{{ $coleta->condominio }}</p>
                                        <p class="text-xs text-slate-500">{{ $coleta->ponto_coleta }}</p>
                                    </td>
                                    <td class="px-4 py-4 text-slate-600">{{ $coleta->data_coleta->format('d/m/Y') }}</td>
                                    <td class="px-4 py-4">
                                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-800">{{ $coleta->status }}</span>
                                    </td>
                                    <td class="py-4 pl-4 text-right">
                                        <div class="inline-flex items-center gap-2">
                                            <a href="{{ route('coletas.edit', $coleta) }}" class="rounded-xl bg-amber-100 px-3 py-1.5 text-xs font-bold text-amber-900 hover:bg-amber-200">Editar</a>
                                            <form action="{{ route('coletas.destroy', $coleta) }}" method="POST" onsubmit="return confirm('Confirma a exclusão deste registro?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded-xl bg-red-100 px-3 py-1.5 text-xs font-bold text-red-800 hover:bg-red-200">Excluir</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="py-8 text-center text-slate-500">Nenhuma coleta cadastrada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>