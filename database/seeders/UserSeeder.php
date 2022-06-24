<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'admin1@amplas.com',
                'password' => Hash::make('admin1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Dina Rifa',
                'email' => 'admin2@amplas.com',
                'password' => Hash::make('admin1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Taufik Anwar',
                'email' => 'taufik@mail.com',
                'password' => Hash::make('taufik123'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'Atmayanti',
                'email' => 'maya@mail.com',
                'password' => Hash::make('maya1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 3
            ],
            [
                'id' => 5,
                'name' => 'Abraham',
                'email' => 'client1@mail.com',
                'password' => Hash::make('client1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 3
            ], 
            [
                'id' => 6,
                'name' => 'Andy',
                'email' => 'client2@mail.com',
                'password' => Hash::make('client1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 3
            ],
            [
                'id' => 7,
                'name' => 'Ireena',
                'email' => 'client3@mail.com',
                'password' => Hash::make('client1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 3
            ],
            [
                'id' => 8,
                'name' => 'Shelby',
                'email' => 'client4@mail.com',
                'password' => Hash::make('client1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 3
            ],
            [
                'id' => 9,
                'name' => 'Polly',
                'email' => '`client`5@mail.com',
                'password' => Hash::make('tukang1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 3
            ],
            [
                'id' => 10,
                'name' => 'Sheeza',
                'email' => 'tukang1@mail.com',
                'password' => Hash::make('tukang1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 2
            ],
            [
                'id' => 11,
                'name' => 'Gragru',
                'email' => 'tukang2@mail.com',
                'password' => Hash::make('tukang1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 2
            ],
            [
                'id' => 12,
                'name' => 'Reza Pangestu',
                'email' => 'tukang3@mail.com',
                'password' => Hash::make('tukang1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 2
            ],
            [
                'id' => 13,
                'name' => 'Fanny',
                'email' => 'tukang6@mail.com',
                'password' => Hash::make('tukang1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 2
            ],
            [
                'id' => 14,
                'name' => 'Prada',
                'email' => 'tukang4@mail.com',
                'password' => Hash::make('tukang1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 2
            ],
            [
                'id' => 15,
                'name' => 'Faiza',
                'email' => 'tukang5@mail.com',
                'password' => Hash::make('tukang1234'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => 2
            ],
        ];

        User::insert($users);
    }
}