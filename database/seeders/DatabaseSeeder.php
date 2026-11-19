<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Administrador geral
        User::firstOrCreate(
            ['email' => 'admin@ecolink.com'],
            [
                'name' => 'Administrador EcoLink',
                'password' => Hash::make('12345678'),
            ]
        );

        // 2. Perfil Síndico (acesso completo ao CRUD de coletas)
        User::firstOrCreate(
            ['email' => 'sindico@ecolink.com'],
            [
                'name' => 'Síndico Parque Verde',
                'password' => Hash::make('12345678'),
            ]
        );

        // 3. Perfil Visitante (bloqueado pelo Middleware ao tentar editar/excluir)
        User::firstOrCreate(
            ['email' => 'visitante@ecolink.com'],
            [
                'name' => 'Visitante Demonstração',
                'password' => Hash::make('12345678'),
            ]
        );

        $this->call([
            ColetaSeeder::class,
        ]);
    }
}