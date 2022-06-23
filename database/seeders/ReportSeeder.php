<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = [
            [
                'type_id' => 1,
                'reported_account' => 4,
                'reporter_account' => 3
            ],
            [
                'type_id' => 2,
                'reported_account' => 4,
                'reporter_account' => 5
            ],
            [
                'type_id' => 3,
                'reported_account' => 4,
                'reporter_account' => 7
            ],
            [
                'type_id' => 1,
                'reported_account' => 4,
                'reporter_account' => 9
            ],
            [
                'type_id' => 1,
                'reported_account' => 12,
                'reporter_account' => 3
            ],
            [
                'type_id' => 1,
                'reported_account' => 11,
                'reporter_account' => 6
            ],
            [
                'type_id' => 1,
                'reported_account' => 13,
                'reporter_account' => 7
            ],
        ];

        Report::insert($reports);
    }
}
