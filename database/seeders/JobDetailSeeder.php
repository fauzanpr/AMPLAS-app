<?php

namespace Database\Seeders;

use App\Models\JobDetail;
use Illuminate\Database\Seeder;

class JobDetailSeeder extends Seeder
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
                'job_id' => 1,
                'item_damaged_name' => ''
            ],
            [
                'job_id' => 2,
                'item_damaged_name' => ''
            ],
            [
                'job_id' => 3,
                'item_damaged_name' => ''
            ],
            [
                'job_id' => 4,
                'item_damaged_name' => ''
            ],
            [
                'job_id' => 5,
                'item_damaged_name' => ''
            ]
        ];

        JobDetail::insert($data);
    }
}
