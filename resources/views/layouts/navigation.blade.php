<nav x-data="{ open: false }" class="border-b border-white/10 bg-[#123c2f] text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 justify-between">
            <div class="flex items-center gap-8">
                <a href="{{ route('home') }}" class="brand flex items-center gap-3 text-xl font-extrabold tracking-tight text-white">
                    <span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#c9f36a] text-[#123c2f]">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 21c-4.5-2.2-7-5.3-7-9.2C5 7.3 8.1 4 12 3c3.9 1 7 4.3 7 8.8 0 3.9-2.5 7-7 9.2Z" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M8.5 15.5c1.2-3.2 3.2-5.4 6.8-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                    </span>
                    EcoLink<span class="text-[#c9f36a]">.</span>
                </a>

                <div class="hidden items-center gap-2 sm:flex">
                    <a href="{{ route('dashboard') }}"
                       class="rounded-full px-4 py-2 text-sm font-bold transition {{ request()->routeIs('dashboard') ? 'bg-[#c9f36a] text-[#123c2f]' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('coletas.index') }}"
                       class="rounded-full px-4 py-2 text-sm font-bold transition {{ request()->routeIs('coletas.*') ? 'bg-[#c9f36a] text-[#123c2f]' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                        Coletas (CRUD)
                    </a>
                    <a href="{{ route('home') }}"
                       class="rounded-full px-4 py-2 text-sm font-bold text-white/80 transition hover:bg-white/10 hover:text-white">
                        Site Público ↗
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white transition hover:bg-white/20 focus:outline-none">
                            <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#c9f36a] text-xs font-extrabold text-[#123c2f]">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="h-4 w-4 fill-current text-white/70" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Meu Perfil
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                Sair da conta
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center rounded-xl p-2 text-white/80 hover:bg-white/10 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden border-t border-white/10 bg-[#10382c] sm:hidden">
        <div class="space-y-1 px-4 pb-3 pt-3">
            <a href="{{ route('dashboard') }}" class="block rounded-xl px-3 py-2 text-sm font-bold {{ request()->routeIs('dashboard') ? 'bg-[#c9f36a] text-[#123c2f]' : 'text-white/80' }}">
                Dashboard
            </a>
            <a href="{{ route('coletas.index') }}" class="block rounded-xl px-3 py-2 text-sm font-bold {{ request()->routeIs('coletas.*') ? 'bg-[#c9f36a] text-[#123c2f]' : 'text-white/80' }}">
                Coletas (CRUD)
            </a>
            <a href="{{ route('home') }}" class="block rounded-xl px-3 py-2 text-sm font-bold text-white/80">
                Site Público ↗
            </a>
        </div>

        <div class="border-t border-white/10 px-4 pb-4 pt-3">
            <div class="text-sm font-extrabold text-white">{{ Auth::user()->name }}</div>
            <div class="text-xs text-white/60">{{ Auth::user()->email }}</div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" class="block rounded-xl px-3 py-2 text-sm font-semibold text-white/80 hover:bg-white/10">
                    Meu Perfil
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-[#c9f36a] hover:bg-white/10">
                        Sair da conta
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>