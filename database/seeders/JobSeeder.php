<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
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
                'job_name' => 'Perbaikan Kulkas',
                'job_type_id' => 2,
                'start_date' => Carbon::now()->toDateTimeString(),
                'finish_date' => Carbon::now()->toDateTimeString(),
                'client_id' => 4,
                'artisan_id' => 10,
                'status' => 1,
                'cancel' => 0
            ],
            [
                'job_name' => 'Perbaikan Atap Rumah',
                'job_type_id' => 4,
                'start_date' => Carbon::now()->toDateTimeString(),
                'finish_date' => Carbon::now()->toDateTimeString(),
                'client_id' => 5,
                'artisan_id' => 11,
                'status' => 1,
                'cancel' => 1
            ],
            [
                'job_name' => 'Perbaikan Sepeda Motor',
                'job_type_id' => 2,
                'start_date' => Carbon::now()->toDateTimeString(),
                'finish_date' => Carbon::now()->toDateTimeString(),
                'client_id' => 6,
                'artisan_id' => 12,
                'status' => 1,
                'cancel' => 1
            ],
            [
                'job_name' => 'Perbaikan Mesin Cuci',
                'job_type_id' => 2,
                'start_date' => Carbon::now()->toDateTimeString(),
                'finish_date' => Carbon::now()->toDateTimeString(),
                'client_id' => 7,
                'artisan_id' => 13,
                'status' => 1,
                'cancel' => 0
            ],
            [
                'job_name' => 'Perbaikan Kaca',
                'job_type_id' => 4,
                'start_date' => Carbon::now()->toDateTimeString(),
                'finish_date' => Carbon::now()->toDateTimeString(),
                'client_id' => 8,
                'artisan_id' => 14,
                'status' => 1,
                'cancel' => 0
            ],
            [
                'job_name' => 'Perbaikan AC',
                'job_type_id' => 2,
                'start_date' => Carbon::now()->toDateTimeString(),
                'finish_date' => Carbon::now()->toDateTimeString(),
                'client_id' => 9,
                'artisan_id' => 15,
                'status' => 1,
                'cancel' => 1
            ]
        ];

        Job::insert($data);
    }
}
