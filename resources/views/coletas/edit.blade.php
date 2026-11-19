<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-extrabold text-slate-800">Editar Coleta #{{ $coleta->id }} ✏️</h2>
    </x-slot>

    <div class="min-h-screen bg-[#f5f7f0] py-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl border border-slate-100 bg-white p-7 shadow-sm sm:p-9">
                @if ($errors->any())
                    <div class="mb-6 rounded-2xl bg-red-50 p-4 text-sm text-red-700">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('coletas.update', $coleta) }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-bold text-slate-700">Material Reciclável</label>
                        <input type="text" name="material" value="{{ old('material', $coleta->material) }}" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-bold text-slate-700">Categoria</label>
                            <select name="categoria" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">
                                @foreach(['Plástico', 'Papel', 'Vidro', 'Metal', 'Eletrônico', 'Misto'] as $cat)
                                    <option value="{{ $cat }}" @selected(old('categoria', $coleta->categoria) === $cat)>{{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700">Peso Estimado (kg)</label>
                            <input type="number" step="0.01" name="peso_kg" value="{{ old('peso_kg', $coleta->peso_kg) }}" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-bold text-slate-700">Condomínio</label>
                            <input type="text" name="condominio" value="{{ old('condominio', $coleta->condominio) }}" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700">Ponto de Coleta</label>
                            <input type="text" name="ponto_coleta" value="{{ old('ponto_coleta', $coleta->ponto_coleta) }}" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-bold text-slate-700">Data da Coleta</label>
                            <input type="date" name="data_coleta" value="{{ old('data_coleta', $coleta->data_coleta->format('Y-m-d')) }}" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700">Status</label>
                            <select name="status" required class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">
                                @foreach(['Aguardando', 'Planejada', 'Concluída'] as $st)
                                    <option value="{{ $st }}" @selected(old('status', $coleta->status) === $st)>{{ $st }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700">Observações</label>
                        <textarea name="observacoes" rows="3" class="mt-1 w-full rounded-xl border-slate-300 focus:border-emerald-600 focus:ring-emerald-600">{{ old('observacoes', $coleta->observacoes) }}</textarea>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4">
                        <a href="{{ route('coletas.index') }}" class="rounded-full px-5 py-2.5 text-sm font-bold text-slate-600 hover:bg-slate-100">Cancelar</a>
                        <button type="submit" class="rounded-full bg-[#123c2f] px-6 py-3 text-sm font-extrabold text-lime-300 hover:bg-[#195740]">Atualizar Registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>