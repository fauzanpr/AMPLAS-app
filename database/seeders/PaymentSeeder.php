<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
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
                'job_id' => 2,
                'nominal_payment' => 500000,
                'proof_payment_path' => '',
                'account_id' => 5
            ],
            [
                'job_id' => 6,
                'nominal_payment' => 1000000,
                'proof_payment_path' => '',
                'account_id' => 3
            ],
            [
                'job_id' => 3,
                'nominal_payment' => 750000,
                'proof_payment_path' => '',
                'account_id' => 1
            ],
            [
                'job_id' => 4,
                'nominal_payment' => 900000,
                'proof_payment_path' => '',
                'account_id' => 4
            ],
            [
                'job_id' => 1,
                'nominal_payment' => 890000,
                'proof_payment_path' => '',
                'account_id' => 6
            ],
            [
                'job_id' => 5,
                'nominal_payment' => 950000,
                'proof_payment_path' => '',
                'account_id' => 2
            ],
        ];
        Payment::insert($data);
    }
}
