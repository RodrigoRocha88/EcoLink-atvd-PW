# EcoLink

Projeto acadêmico de Trabalho de Conclusão de Curso sobre gestão de resíduos em condomínios. O EcoLink propõe aproximar moradores, condomínios e profissionais da reciclagem para tornar o descarte e a organização das coletas mais acessíveis e colaborativos.

> Esta entrega é uma demonstração acadêmica em Laravel Breeze, sem CRUD de resíduos ou coletas. Os indicadores e registros apresentados no Dashboard são ilustrativos.

## Objetivo do TCC

Propor uma plataforma que ajude a organizar a gestão de resíduos em ambientes residenciais, facilite a comunicação entre condomínios e profissionais da reciclagem e incentive práticas de descarte consciente.

## Proposta e funcionalidades

A solução EcoLink busca:

- apoiar a orientação sobre separação e descarte de resíduos;
- aproximar condomínios e profissionais da reciclagem;
- facilitar a organização e o planejamento de coletas;
- apresentar informações que incentivem hábitos sustentáveis.

Nesta versão acadêmica, a Landing Page apresenta a proposta e o Dashboard exibe uma prévia demonstrativa. Os números e registros do Dashboard são fixos e fictícios; não representam dados reais de coletas nem são carregados de tabelas do domínio.

## Tecnologias da versão acadêmica

Esta é a versão implementada para a atividade escolar:

- **Back-end:** PHP e Laravel 13.
- **Autenticação:** Laravel Breeze 2.
- **Front-end:** Blade, Tailwind CSS e Alpine.js.
- **Build de assets:** Vite.
- **Banco de dados padrão:** SQLite.
- **Banco alternativo configurado:** MySQL.

O Dashboard é protegido pelas middlewares `auth` e `verified`. A entrega não implementa CRUD de coletas ou resíduos.

## Tecnologias planejadas para a solução final

As tecnologias a seguir são o planejamento da solução final do TCC. Elas **não estão implementadas nesta versão acadêmica**, que utiliza Laravel Breeze:

| Parte da solução | Tecnologia planejada |
| --- | --- |
| Aplicativo mobile | React Native + TypeScript + Expo |
| Site | Next.js + TypeScript |
| API | Route Handlers do Next.js |
| Banco de dados | MySQL |

## Pré-requisitos

- PHP 8.3 ou superior, com extensões necessárias pelo Laravel e PDO SQLite habilitado para usar o banco padrão.
- Composer.
- Node.js compatível com o Vite do projeto: `^20.19.0` ou `>=22.12.0`.
- npm.
- Git.

Para usar MySQL em vez de SQLite, também é necessário ter um servidor MySQL e a extensão PDO MySQL habilitada no PHP.

## Instalação e execução

Os comandos abaixo usam Windows PowerShell. Execute-os na pasta em que deseja salvar o repositório.

### 1. Clonar o repositório

```powershell
git clone https://github.com/RodrigoRocha88/EcoLink-atvd-PW.git
Set-Location EcoLink-atvd-PW
```

### 2. Instalar dependências

```powershell
composer install
npm install
```

O `composer install` instala as dependências PHP conforme o `composer.lock`; `npm install` instala as dependências front-end conforme o `package-lock.json`.

### 3. Configurar o ambiente local

Copie o arquivo de exemplo somente se ainda não existir um `.env`:

```powershell
if (-not (Test-Path .env)) {
    Copy-Item .env.example .env
}
```

Gere uma chave própria para a aplicação:

```powershell
php artisan key:generate
```

Não compartilhe o arquivo `.env` nem publique seus valores. O `.env` contém configurações locais e pode conter informações sensíveis.

### 4. Configurar SQLite

SQLite é o banco padrão do projeto. Se o arquivo ainda não existir, crie-o:

```powershell
if (-not (Test-Path database\database.sqlite)) {
    New-Item -ItemType File -Path database\database.sqlite
}
```

Com `DB_CONNECTION=sqlite` e `DB_DATABASE` não definido, a aplicação usa `database/database.sqlite`. Confirme que esses valores estão corretos no seu `.env`.

#### Usar MySQL em vez de SQLite

Se for usar MySQL, configure no seu `.env` a conexão, host, porta, nome do banco, usuário e senha correspondentes ao seu ambiente. Não copie credenciais deste README nem as publique no GitHub. Depois, prossiga com as migrations.

## Migrações e dados de demonstração

Aplique as migrations:

```powershell
php artisan migrate
```

O projeto inclui migrations para usuários, redefinição de senha, sessões, cache e filas. Não há migrations de domínio para coletas ou condomínios nesta versão.

Execute o Seeder:

```powershell
php artisan db:seed
```

O `DatabaseSeeder` cria ou encontra 10 usuários de demonstração na tabela `users`, usando e-mails estáveis e `firstOrCreate` para evitar duplicações quando ele é executado novamente. A factory existente fornece os demais atributos requeridos pelo modelo.

Para conferir os registros no SQLite com uma consulta somente de leitura, abra `database/database.sqlite` em uma ferramenta como DBeaver e execute:

```sql
SELECT COUNT(*)
FROM users
WHERE email IN (
    'test@example.com',
    'ana.souza@ecolink.test',
    'bruno.lima@ecolink.test',
    'carla.mendes@ecolink.test',
    'daniel.rocha@ecolink.test',
    'eduarda.alves@ecolink.test',
    'felipe.costa@ecolink.test',
    'gabriela.martins@ecolink.test',
    'henrique.oliveira@ecolink.test',
    'isabela.ferreira@ecolink.test'
);
```

O resultado esperado é `10`. Essa consulta verifica os usuários identificados pelo Seeder; ela não altera o banco.

## Compilar os assets e iniciar a aplicação

Compile os assets:

```powershell
npm run build
```

Inicie o ambiente local:

```powershell
composer run dev
```

Esse script inicia o servidor Laravel, o processo de fila e o Vite. Acesse a aplicação em:

- Landing Page: http://127.0.0.1:8000
- Login: http://127.0.0.1:8000/login
- Cadastro: http://127.0.0.1:8000/register
- Recuperação de senha: http://127.0.0.1:8000/forgot-password
- Dashboard: http://127.0.0.1:8000/dashboard

O Dashboard requer autenticação. O `.env.example` configura o mailer como `log`; o envio de mensagens não está configurado para um serviço de e-mail real.

Para executar a suíte automatizada:

```powershell
composer test
```

## Organização do projeto

- `app/Models/` — modelos Eloquent; atualmente inclui o modelo de usuário.
- `app/Http/Controllers/` — controladores da aplicação e de autenticação.
- `database/migrations/` — estrutura das tabelas de autenticação, cache e filas.
- `database/factories/` — factories para dados de teste e demonstração.
- `database/seeders/` — Seeder principal dos usuários de demonstração.
- `resources/views/welcome.blade.php` — Landing Page.
- `resources/views/dashboard.blade.php` — Dashboard demonstrativo.
- `resources/views/auth/` — telas do Laravel Breeze.
- `resources/css/` e `resources/js/` — assets de front-end.
- `routes/web.php` e `routes/auth.php` — rotas web e de autenticação.

## Integrantes e atribuições

As atribuições abaixo foram informadas pelo grupo:

- **Pedro Tersi:** Desenvolvimento do site, criação do protótipo no Figma e gravação do vídeo.
- **Renan Rezaghi:** Desenvolvimento do site.
- **Rodrigo Rocha:** Desenvolvimento do site.

## Links do projeto e da entrega

- **Repositório GitHub:** https://github.com/RodrigoRocha88/EcoLink-atvd-PW
- **Protótipo Figma:** [Inserir link do Figma]
- **Vídeo de demonstração no YouTube:** [Inserir link do vídeo]

Os links do Figma e do vídeo devem ser substituídos pelos links publicados antes da entrega da atividade.
