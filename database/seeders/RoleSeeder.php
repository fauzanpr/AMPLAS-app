<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'role_name' => 'admin',
            ],
            [
                'id' => 2,
                'role_name' => 'pekerja',
            ],
            [
                'id' => 3,
                'role_name' => 'pengguna',
            ]
        ];

        Role::insert($roles);

    }
}
