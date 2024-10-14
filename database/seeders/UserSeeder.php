<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Guillermo Garcia',
                'email' => 'guillermogarcia@gmail.com',
                'password' => bcrypt('alisson1704'),
                'role' => 'admin_sistema',
            ],
            [
                'name' => 'Gio',
                'email' => 'gioadmin@gmail.com',
                'password' => bcrypt('soyadmin'),
                'role' => 'admin',
            ],
            [
                'name' => 'Alisson Medina',
                'email' => 'alimedina@gmail.com',
                'password' => bcrypt('alisson1704'),
                'role' => 'usuario',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                ['name' => $userData['name'], 'password' => $userData['password']]
            );

            $user->assignRole($userData['role']);
        }
    }
}
