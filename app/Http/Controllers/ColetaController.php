<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    public function index()
    {
        $coletas = Coleta::orderByDesc('data_coleta')->orderByDesc('id')->get();
        return view('coletas.index', compact('coletas'));
    }

    public function create()
    {
        return view('coletas.create');
    }
    
    public function store(Request $request)
    {
        $dados = $request->validate([
            'material' => 'required|string|max:255',
            'categoria' => 'required|string|max:100',
            'peso_kg' => 'required|numeric|min:0.1',
            'condominio' => 'required|string|max:255',
            'ponto_coleta' => 'required|string|max:255',
            'data_coleta' => 'required|date',
            'status' => 'required|in:Aguardando,Planejada,Concluída',
            'observacoes' => 'nullable|string|max:1000',
        ]);

        Coleta::create($dados);

        return redirect()->route('coletas.index')
            ->with('success', 'Coleta cadastrada com sucesso na plataforma EcoLink!');
    }

    public function show(Coleta $coleta)
    {
        return view('coletas.show', compact('coleta'));
    }

    public function edit(Coleta $coleta)
    {
        return view('coletas.edit', compact('coleta'));
    }

    public function update(Request $request, Coleta $coleta)
    {
        $dados = $request->validate([
            'material' => 'required|string|max:255',
            'categoria' => 'required|string|max:100',
            'peso_kg' => 'required|numeric|min:0.1',
            'condominio' => 'required|string|max:255',
            'ponto_coleta' => 'required|string|max:255',
            'data_coleta' => 'required|date',
            'status' => 'required|in:Aguardando,Planejada,Concluída',
            'observacoes' => 'nullable|string|max:1000',
        ]);

        $coleta->update($dados);

        return redirect()->route('coletas.index')
            ->with('success', 'Registro de coleta atualizado com sucesso!');
    }

    public function destroy(Coleta $coleta)
    {
        $coleta->delete();

        return redirect()->route('coletas.index')
            ->with('success', 'Registro de coleta removido com sucesso!');
    }
}