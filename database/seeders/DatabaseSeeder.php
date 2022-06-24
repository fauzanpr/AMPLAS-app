<?php

namespace Database\Seeders;

use App\Models\PersonalData;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            ReportTypeSeeder::class,
            ReportSeeder::class,
            RatingSeeder::class,
            PortfolioSeeder::class,
            PersonalDataSeeder::class,
            PaymentSeeder::class,
            JobTypeSeeder::class,
            JobSeeder::class,
            JobDetailSeeder::class,
            CancellationSeeder::class
        ]);
    }
}
