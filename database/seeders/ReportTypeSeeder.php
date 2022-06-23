<?php

namespace Database\Seeders;

use App\Models\ReportType;
use Illuminate\Database\Seeder;

class ReportTypeSeeder extends Seeder
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
                'id' => 1,
                'report_type_name' => 'Penipuan'
            ],
            [
                'id' => 2,
                'report_type_name' => 'Keahlian tidak sesuai'
            ],
            [
                'id' => 3,
                'report_type_name' => 'Kerusakan tidak diperbaiki'
            ],
            [
                'id' => 4,
                'report_type_name' => 'Order fiktif'
            ],
        ];

        ReportType::insert($reports);
    }
}
