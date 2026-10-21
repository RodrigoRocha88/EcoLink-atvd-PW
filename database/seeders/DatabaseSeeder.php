<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Test User', 'email' => 'test@example.com'],
            ['name' => 'Ana Souza', 'email' => 'ana.souza@ecolink.test'],
            ['name' => 'Bruno Lima', 'email' => 'bruno.lima@ecolink.test'],
            ['name' => 'Carla Mendes', 'email' => 'carla.mendes@ecolink.test'],
            ['name' => 'Daniel Rocha', 'email' => 'daniel.rocha@ecolink.test'],
            ['name' => 'Eduarda Alves', 'email' => 'eduarda.alves@ecolink.test'],
            ['name' => 'Felipe Costa', 'email' => 'felipe.costa@ecolink.test'],
            ['name' => 'Gabriela Martins', 'email' => 'gabriela.martins@ecolink.test'],
            ['name' => 'Henrique Oliveira', 'email' => 'henrique.oliveira@ecolink.test'],
            ['name' => 'Isabela Ferreira', 'email' => 'isabela.ferreira@ecolink.test'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['email' => $user['email']],
                User::factory()->raw($user),
            );
        }
    }
}
