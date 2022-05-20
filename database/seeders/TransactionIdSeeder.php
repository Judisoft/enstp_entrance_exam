<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 50; $i++) {
            DB::table('transaction_ids')->insert([
                'transaction_id' => random_int(1000000000, 1256312458)
            ]);
        }
        
    }
}
