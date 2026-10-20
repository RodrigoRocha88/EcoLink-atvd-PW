```blade
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Projeto TCC') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <header class="bg-gray-900 text-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="{{ url('/') }}" class="text-xl font-bold">
                NOME DO PROJETO
            </a>

            <div class="flex items-center gap-4">
                <a href="#sobre" class="hover:text-gray-300">
                    Sobre
                </a>

                <a href="#tecnologias" class="hover:text-gray-300">
                    Tecnologias
                </a>

                @auth
                    <a href="{{ route('dashboard') }}"
                       class="rounded-lg bg-blue-600 px-4 py-2 hover:bg-blue-700">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="rounded-lg border border-white px-4 py-2 hover:bg-gray-800">
                        Entrar
                    </a>

                    <a href="{{ route('register') }}"
                       class="rounded-lg bg-blue-600 px-4 py-2 hover:bg-blue-700">
                        Cadastrar
                    </a>
                @endauth
            </div>
        </nav>
    </header>

    <main>

        <section class="bg-white px-6 py-24 text-center">
            <div class="mx-auto max-w-4xl">

                <h1 class="mb-6 text-4xl font-bold md:text-6xl">
                    NOME DO PROJETO
                </h1>

                <p class="mb-8 text-lg text-gray-600">
                    Insira aqui uma descrição resumida do seu TCC,
                    explicando o propósito e a importância do projeto.
                </p>

                <a href="#sobre"
                   class="inline-block rounded-lg bg-blue-600 px-6 py-3
                          font-semibold text-white hover:bg-blue-700">
                    Conheça o projeto
                </a>

            </div>
        </section>

        <section id="sobre" class="px-6 py-20">
            <div class="mx-auto max-w-5xl">

                <h2 class="mb-6 text-3xl font-bold">
                    Sobre o projeto
                </h2>

                <p class="mb-6 leading-8 text-gray-600">
                    Apresente aqui o contexto, a justificativa e o
                    problema que o TCC pretende solucionar.
                </p>

                <h3 class="mb-3 text-xl font-semibold">
                    Objetivo geral
                </h3>

                <p class="mb-6 leading-8 text-gray-600">
                    Descreva o principal objetivo do projeto.
                </p>

                <h3 class="mb-3 text-xl font-semibold">
                    Público-alvo
                </h3>

                <p class="leading-8 text-gray-600">
                    Informe quem utilizará o sistema e como ele poderá
                    ajudar essas pessoas.
                </p>

            </div>
        </section>

        <section id="tecnologias" class="bg-gray-100 px-6 py-20">
            <div class="mx-auto max-w-5xl">

                <h2 class="mb-8 text-3xl font-bold">
                    Tecnologias utilizadas
                </h2>

                <div class="grid gap-6 md:grid-cols-2">

                    <article class="rounded-xl bg-white p-6 shadow-sm">
                        <h3 class="mb-3 text-xl font-semibold">
                            Frontend
                        </h3>

                        <p class="text-gray-600">
                            Blade, HTML, Tailwind CSS e JavaScript.
                        </p>
                    </article>

                    <article class="rounded-xl bg-white p-6 shadow-sm">
                        <h3 class="mb-3 text-xl font-semibold">
                            Backend
                        </h3>

                        <p class="text-gray-600">
                            PHP e Laravel.
                        </p>
                    </article>

                    <article class="rounded-xl bg-white p-6 shadow-sm">
                        <h3 class="mb-3 text-xl font-semibold">
                            Banco de dados
                        </h3>

                        <p class="text-gray-600">
                            MySQL, utilizando migrations, models e seeders.
                        </p>
                    </article>

                    <article class="rounded-xl bg-white p-6 shadow-sm">
                        <h3 class="mb-3 text-xl font-semibold">
                            Autenticação
                        </h3>

                        <p class="text-gray-600">
                            Laravel Breeze, com login e cadastro.
                        </p>
                    </article>

                </div>

            </div>
        </section>

        <section id="integrantes" class="px-6 py-20">
            <div class="mx-auto max-w-5xl">

                <h2 class="mb-6 text-3xl font-bold">
                    Equipe de desenvolvimento
                </h2>

                <p class="mb-4 text-gray-600">
                    Insira aqui os nomes dos integrantes e as
                    respectivas responsabilidades no projeto.
                </p>

                <ul class="list-inside list-disc space-y-2 text-gray-600">
                    <li>Integrante 1 — atribuição no projeto.</li>
                    <li>Integrante 2 — atribuição no projeto.</li>
                    <li>Integrante 3 — atribuição no projeto.</li>
                </ul>

            </div>
        </section>

        <section id="figma" class="bg-white px-6 py-20 text-center">
            <div class="mx-auto max-w-3xl">

                <h2 class="mb-4 text-3xl font-bold">
                    Protótipos do projeto
                </h2>

                <p class="mb-6 text-gray-600">
                    Confira o protótipo visual desenvolvido pela equipe.
                </p>

                <a href="COLOQUE_AQUI_O_LINK_DO_FIGMA"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-block rounded-lg bg-gray-900 px-6 py-3
                          font-semibold text-white hover:bg-gray-700">
                    Acessar o Figma
                </a>

            </div>
        </section>

    </main>

    <footer class="bg-gray-900 px-6 py-8 text-center text-white">
        <p>
            Projeto desenvolvido para o Trabalho de Conclusão de Curso.
        </p>

        <p class="mt-2 text-sm text-gray-400">
            Desenvolvido com Laravel e Laravel Breeze.
        </p>
    </footer>

</body>
</html>
