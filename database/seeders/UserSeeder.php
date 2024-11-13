<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'teste@teste.com')->first();
        if (!$user) {
            User::create(
                [
                    'email' => 'teste@teste.com',
                    'name' => 'Usuário de teste',
                    'password' => bcrypt('123123123'),
                ]
            );
        }
    }
}
