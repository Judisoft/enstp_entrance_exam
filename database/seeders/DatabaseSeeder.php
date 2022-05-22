<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ConcourRegistration;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(250)->has(ConcourRegistration::factory(100)->count(1), 'concour_registrations')->create();
    }
}
