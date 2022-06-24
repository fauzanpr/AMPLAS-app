<?php

namespace Database\Seeders;

use App\Models\PersonalData;
use Illuminate\Database\Seeder;

class PersonalDataSeeder extends Seeder
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
                'name' => 'Angga Syahputra',
                'date_of_birth' => '1999-12-5',
                'gender' => 'L',
                'last_education' => 'SMA',
                'kecamatan' => 'Patianrowo',
                'kabupaten' => 'Nganjuk',
                'provinsi' => 'Jawa Timur',
                'desa' => 'Sugihwaras',
                'phone' => '08125433778' 
            ],
            [
                'name' => 'Ahmad Kurniawan',
                'date_of_birth' => '2000-11-10',
                'gender' => 'L',
                'last_education' => 'D3',
                'kecamatan' => 'Ngadiluwih',
                'kabupaten' => 'Kediri',
                'provinsi' => 'Jawa Timur',
                'desa' => 'Ngadiluwih',
                'phone' => '08125433778' 
            ],
            [
                'name' => 'Ariansyah Dwi',
                'date_of_birth' => '1998-5-12',
                'gender' => 'L',
                'last_education' => 'SMK',
                'kecamatan' => 'Megaluh',
                'kabupaten' => 'Jombang',
                'provinsi' => 'Jawa Timur',
                'desa' => 'Megaluh',
                'phone' => '08125433778' 
            ],
            [
                'name' => 'Anita Dewi',
                'date_of_birth' => '2001-1-3',
                'gender' => 'P',
                'last_education' => 'D3',
                'kecamatan' => 'Kertosono',
                'kabupaten' => 'Nganjuk',
                'provinsi' => 'Jawa Timur',
                'desa' => 'Banaran',
                'phone' => '08125433778' 
            ],
            [
                'name' => 'Nadya Putri',
                'date_of_birth' => '2002-3-1',
                'gender' => 'P',
                'last_education' => 'D4',
                'kecamatan' => 'Banyakan',
                'kabupaten' => 'Kediri',
                'provinsi' => 'Jawa Timur',
                'desa' => 'Banyakan',
                'phone' => '08125433778' 
            ],
            [
                'name' => 'Yoga Anggara',
                'date_of_birth' => '2002-5-8',
                'gender' => 'L',
                'last_education' => 'SMK',
                'kecamatan' => 'Denayar',
                'kabupaten' => 'Jombang',
                'provinsi' => 'Jawa Timur',
                'desa' => 'Denayar',
                'phone' => '08125433778' 
            ],
        ];
        PersonalData::insert($data);
    }
}
