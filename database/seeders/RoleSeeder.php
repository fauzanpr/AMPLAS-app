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
            ['role_name' => 'admin'],
            ['role_name' => 'pekerja'],
            ['role_name' => 'pelanggan']
        ];

        Role::create(['role_name' => 'pelanggan']);

    }
}
