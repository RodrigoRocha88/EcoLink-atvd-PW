<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerificaAcessoEcoLink
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Garante que o usuário está autenticado na plataforma
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Acesso negado: faça login para gerenciar os dados do EcoLink.');
        }

        // 2. Bloqueia alterações no banco caso seja uma conta apenas de visualização
        if (Auth::user()->email === 'visitante@ecolink.com' && !$request->isMethod('get')) {
            return redirect()->route('dashboard')
                ->with('error', 'Perfil visitante não possui permissão para alterar ou excluir coletas.');
        }

        // 3. Adiciona cabeçalho identificando a passagem pelo Middleware do EcoLink
        $response = $next($request);
        $response->headers->set('X-EcoLink-Middleware', 'VerificaAcessoEcoLink-Ativo');

        return $response;
    }
}