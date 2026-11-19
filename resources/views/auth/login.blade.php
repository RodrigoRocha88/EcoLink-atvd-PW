<x-guest-layout>
    <div class="mb-6">
        <span class="inline-flex items-center gap-2 rounded-full bg-[#eff9df] px-3.5 py-1 text-xs font-extrabold uppercase tracking-wider text-[#123c2f]">
            🌱 Acesso ao Painel
        </span>
        <h1 class="mt-3 text-2xl font-extrabold tracking-tight text-[#123c2f]">Bem-vindo de volta</h1>
        <p class="mt-1 text-sm text-slate-500">Entre com sua conta para acompanhar e gerenciar as coletas.</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if(session('error'))
        <div class="mb-4 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-xs font-bold text-red-700">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-sm font-bold text-[#18342a]">E-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                   placeholder="seuemail@exemplo.com"
                   class="mt-1.5 block w-full rounded-2xl border-slate-200 bg-[#f7f8f1]/60 px-4 py-3 text-sm text-slate-800 transition focus:border-[#237a57] focus:bg-white focus:ring-[#237a57]">
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-bold text-[#18342a]">Senha</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-xs font-bold text-[#237a57] hover:underline">
                        Esqueceu a senha?
                    </a>
                @endif
            </div>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                   placeholder="••••••••"
                   class="mt-1.5 block w-full rounded-2xl border-slate-200 bg-[#f7f8f1]/60 px-4 py-3 text-sm text-slate-800 transition focus:border-[#237a57] focus:bg-white focus:ring-[#237a57]">
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <div class="flex items-center pt-1">
            <label for="remember_me" class="inline-flex cursor-pointer items-center">
                <input id="remember_me" type="checkbox" name="remember"
                       class="rounded-md border-slate-300 text-[#123c2f] shadow-sm focus:ring-[#237a57]">
                <span class="ms-2 text-sm text-slate-600">Manter conectado</span>
            </label>
        </div>

        <button type="submit"
                class="mt-2 flex w-full items-center justify-center gap-2 rounded-full bg-[#123c2f] px-6 py-3.5 text-sm font-extrabold text-[#c9f36a] shadow-lg transition hover:-translate-y-0.5 hover:bg-[#195740]">
            Entrar na plataforma <span aria-hidden="true">→</span>
        </button>
    </form>

    <div class="mt-6 border-t border-slate-100 pt-5 text-center text-sm text-slate-600">
        Ainda não possui uma conta?
        <a href="{{ route('register') }}" class="font-extrabold text-[#123c2f] underline decoration-[#c9f36a] decoration-2 underline-offset-4 hover:text-[#237a57]">
            Criar cadastro
        </a>
    </div>
</x-guest-layout>