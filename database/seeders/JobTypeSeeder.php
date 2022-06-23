<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Elektronik'
            ],
            [
                'name' => 'Listrik'
            ],
            [
                'name' => 'Mesin'
            ],
            [
                'name' => 'Bamgunan'
            ]
        ];

        JobType::insert($data);
    }
}
