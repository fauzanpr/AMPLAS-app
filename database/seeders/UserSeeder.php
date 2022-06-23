<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'name' => 'Administrator',
                'email' => 'admin@amplas.com',
                'password' => Hash::make('admin1234'),
                'role_id' => 1
            ],
            [
                'name' => 'Taufik Anwar',
                'email' => 'taufik@mail.com',
                'password' => Hash::make('taufik123'),
                'role_id' => 2
            ],
            [
                'name' => 'Atmayanti',
                'email' => 'maya@mail.com',
                'password' => Hash::make('maya1234'),
                'role_id' => 3
            ], 
        ];

        User::insert($users);
    }
}