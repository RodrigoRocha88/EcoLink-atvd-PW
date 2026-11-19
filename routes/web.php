<?php

use App\Http\Controllers\ColetaController;
use App\Http\Controllers\ProfileController;
use App\Models\Coleta;
use Illuminate\Support\Facades\Route;

// Página inicial exibindo todos os dados reais do TCC
Route::get('/', function () {
    $coletas = Coleta::orderByDesc('data_coleta')->orderByDesc('id')->get();
    $totalColetas = $coletas->count();
    $totalPeso = $coletas->sum('peso_kg');
    $proximaColeta = $coletas->whereIn('status', ['Aguardando', 'Planejada'])->first();

    return view('welcome', compact('coletas', 'totalColetas', 'totalPeso', 'proximaColeta'));
})->name('home');

// Dashboard protegido pelo Breeze + Middleware personalizado do EcoLink
Route::get('/dashboard', function () {
    $coletas = Coleta::orderByDesc('data_coleta')->orderByDesc('id')->get();
    $totalColetas = $coletas->count();
    $totalPeso = $coletas->sum('peso_kg');
    $solicitacoesAbertas = $coletas->where('status', 'Aguardando')->count();
    $coletasConcluidas = $coletas->where('status', 'Concluída')->count();

    return view('dashboard', compact(
        'coletas',
        'totalColetas',
        'totalPeso',
        'solicitacoesAbertas',
        'coletasConcluidas'
    ));
})->middleware(['auth', 'verified', 'ecolink.acesso'])->name('dashboard');

// Rotas do CRUD e Perfil controladas pelo Middleware
Route::middleware(['auth', 'ecolink.acesso'])->group(function () {
    Route::resource('coletas', ColetaController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rota FallBack obrigatória (captura qualquer URL inexistente)
Route::fallback(function () {
    return response()->view('errors.fallback', [], 404);
});