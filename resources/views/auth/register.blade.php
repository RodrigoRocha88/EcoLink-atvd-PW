<x-guest-layout>
    <div class="mb-6">
        <span class="inline-flex items-center gap-2 rounded-full bg-[#eff9df] px-3.5 py-1 text-xs font-extrabold uppercase tracking-wider text-[#123c2f]">
            ♻️ Nova Conta
        </span>
        <h1 class="mt-3 text-2xl font-extrabold tracking-tight text-[#123c2f]">Junte-se ao EcoLink</h1>
        <p class="mt-1 text-sm text-slate-500">Crie seu perfil para registrar coletas e acompanhar indicadores.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-bold text-[#18342a]">Nome completo</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                   placeholder="Ex: João da Silva"
                   class="mt-1.5 block w-full rounded-2xl border-slate-200 bg-[#f7f8f1]/60 px-4 py-3 text-sm text-slate-800 transition focus:border-[#237a57] focus:bg-white focus:ring-[#237a57]">
            <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
        </div>

        <div>
            <label for="email" class="block text-sm font-bold text-[#18342a]">E-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                   placeholder="seuemail@exemplo.com"
                   class="mt-1.5 block w-full rounded-2xl border-slate-200 bg-[#f7f8f1]/60 px-4 py-3 text-sm text-slate-800 transition focus:border-[#237a57] focus:bg-white focus:ring-[#237a57]">
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <div>
            <label for="password" class="block text-sm font-bold text-[#18342a]">Senha</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                   placeholder="Mínimo de 8 caracteres"
                   class="mt-1.5 block w-full rounded-2xl border-slate-200 bg-[#f7f8f1]/60 px-4 py-3 text-sm text-slate-800 transition focus:border-[#237a57] focus:bg-white focus:ring-[#237a57]">
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-bold text-[#18342a]">Confirmar senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                   placeholder="Repita sua senha"
                   class="mt-1.5 block w-full rounded-2xl border-slate-200 bg-[#f7f8f1]/60 px-4 py-3 text-sm text-slate-800 transition focus:border-[#237a57] focus:bg-white focus:ring-[#237a57]">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
        </div>

        <button type="submit"
                class="mt-2 flex w-full items-center justify-center gap-2 rounded-full bg-[#c9f36a] px-6 py-3.5 text-sm font-extrabold text-[#123c2f] shadow-lg transition hover:-translate-y-0.5 hover:brightness-95">
            Concluir cadastro <span aria-hidden="true">↗</span>
        </button>
    </form>

    <div class="mt-6 border-t border-slate-100 pt-5 text-center text-sm text-slate-600">
        Já possui cadastro?
        <a href="{{ route('login') }}" class="font-extrabold text-[#123c2f] underline decoration-[#c9f36a] decoration-2 underline-offset-4 hover:text-[#237a57]">
            Entrar agora
        </a>
    </div>
</x-guest-layout>