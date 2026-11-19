<?php

namespace Database\Seeders;

use App\Models\Coleta;
use Illuminate\Database\Seeder;

class ColetaSeeder extends Seeder
{
    public function run(): void
    {
        $coletas = [
            [
                'material' => 'Garrafas PET e Embalagens',
                'categoria' => 'Plástico',
                'peso_kg' => 14.50,
                'condominio' => 'Condomínio Parque Verde',
                'ponto_coleta' => 'Ecoponto Bloco A',
                'data_coleta' => '2026-11-10',
                'status' => 'Concluída',
                'observacoes' => 'Material prensado e higienizado pelos moradores.',
            ],
            [
                'material' => 'Caixas de Papelão Ondulado',
                'categoria' => 'Papel',
                'peso_kg' => 22.00,
                'condominio' => 'Residencial Jardim das Flores',
                'ponto_coleta' => 'Área de Reciclagem Central',
                'data_coleta' => '2026-11-12',
                'status' => 'Concluída',
                'observacoes' => 'Caixas desmontadas e amarradas em fardos.',
            ],
            [
                'material' => 'Latinhas de Alumínio',
                'categoria' => 'Metal',
                'peso_kg' => 6.80,
                'condominio' => 'Condomínio Parque Verde',
                'ponto_coleta' => 'Ecoponto Bloco B',
                'data_coleta' => '2026-11-14',
                'status' => 'Concluída',
                'observacoes' => 'Separadas em sacos identificados.',
            ],
            [
                'material' => 'Potes e Garrafas de Vidro',
                'categoria' => 'Vidro',
                'peso_kg' => 18.40,
                'condominio' => 'Edifício Horizonte Azul',
                'ponto_coleta' => 'Doca de Serviço Subsolo',
                'data_coleta' => '2026-11-16',
                'status' => 'Planejada',
                'observacoes' => 'Acondicionados em caixas rígidas para segurança do coletor.',
            ],
            [
                'material' => 'Recicláveis Secos Mistos',
                'categoria' => 'Misto',
                'peso_kg' => 15.20,
                'condominio' => 'Condomínio Vila Sustentável',
                'ponto_coleta' => 'Portaria Secundária',
                'data_coleta' => '2026-11-18',
                'status' => 'Aguardando',
                'observacoes' => 'Triagem prévia realizada pela zeladoria.',
            ],
            [
                'material' => 'Cabos, Carregadores e Pilhas',
                'categoria' => 'Eletrônico',
                'peso_kg' => 4.30,
                'condominio' => 'Residencial Jardim das Flores',
                'ponto_coleta' => 'Coletor Especial Hall',
                'data_coleta' => '2026-11-19',
                'status' => 'Planejada',
                'observacoes' => 'Destinação para cooperativa certificada de e-lixo.',
            ],
            [
                'material' => 'Jornais, Revistas e Folhas A4',
                'categoria' => 'Papel',
                'peso_kg' => 11.00,
                'condominio' => 'Edifício Horizonte Azul',
                'ponto_coleta' => 'Área Comum Torre 1',
                'data_coleta' => '2026-11-20',
                'status' => 'Aguardando',
                'observacoes' => 'Papéis secos sem contato com orgânicos.',
            ],
            [
                'material' => 'Frascos de Produtos de Limpeza (PEAD)',
                'categoria' => 'Plástico',
                'peso_kg' => 9.75,
                'condominio' => 'Condomínio Vila Sustentável',
                'ponto_coleta' => 'Ecoponto Central',
                'data_coleta' => '2026-11-21',
                'status' => 'Planejada',
                'observacoes' => 'Embalagens enxaguadas e sem tampas.',
            ],
            [
                'material' => 'Sucata Metálica e Tampas',
                'categoria' => 'Metal',
                'peso_kg' => 8.15,
                'condominio' => 'Condomínio Parque Verde',
                'ponto_coleta' => 'Ecoponto Bloco C',
                'data_coleta' => '2026-11-23',
                'status' => 'Aguardando',
                'observacoes' => 'Aguardando confirmação de horário com reciclador local.',
            ],
            [
                'material' => 'Embalagens Longa Vida (Tetra Pak)',
                'categoria' => 'Misto',
                'peso_kg' => 12.90,
                'condominio' => 'Residencial Jardim das Flores',
                'ponto_coleta' => 'Área de Reciclagem Central',
                'data_coleta' => '2026-11-25',
                'status' => 'Aguardando',
                'observacoes' => 'Caixas higienizadas e dobradas.',
            ],
        ];

        foreach ($coletas as $coleta) {
            Coleta::create($coleta);
        }
    }
}