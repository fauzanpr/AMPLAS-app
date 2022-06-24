<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
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
                'portfolio_name' => 'Pusat Servis LG',
                'path_to_file' => '',
                'account_id' => 6
            ],
            [
                'portfolio_name' => 'Sertifikat dari Samsung Tech Institute',
                'path_to_file' => '',
                'account_id' => 1
            ],
            [
                'portfolio_name' => 'Pelatihan dan Sertifikasi Pekerja Kontruksi Semen Gresik',
                'path_to_file' => '',
                'account_id' => 4
            ],
            [
                'portfolio_name' => 'Sertifikasi PT PLN (PERSERO)',
                'path_to_file' => '',
                'account_id' => 3
            ],
            [
                'portfolio_name' => 'Sertifikasi PT Jasa Pemeriksaan Kelistrikan Indonesia',
                'path_to_file' => '',
                'account_id' => 1
            ],
            [
                'portfolio_name' => 'Sertifikasi PT Pembangunan Perumahan',
                'path_to_file' => '',
                'account_id' => 5
            ],
            [
                'portfolio_name' => 'Pelatihan dan Sertifikasi Pekerja Kontruksi Semen Gresik',
                'path_to_file' => '',
                'account_id' => 2
            ],
            [
                'portfolio_name' => 'Sertifikasi PT Jasa Pemeriksaan Kelistrikan Indonesia',
                'path_to_file' => '',
                'account_id' => 1
            ],
            [
                'portfolio_name' => 'Sertifikasi PT Pembangunan Perumahan',
                'path_to_file' => '',
                'account_id' => 2
            ],
            [
                'portfolio_name' => 'Sertifikat dari Samsung Tech Institute',
                'path_to_file' => '',
                'account_id' => 6
            ],
        ];
        Portfolio::insert($data);
    }
}
