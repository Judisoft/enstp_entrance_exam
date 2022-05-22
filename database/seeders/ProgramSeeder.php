<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = [
            'btec' => 'Basic Technicians and Ordinary Technicians',
            'htec' => 'Higher Technician Cycle',
            'eng' => 'Engineering Cycle',
            'arc' => 'Architecture'
        ];

        $keys = array_keys($program);

        for ($i=0; $i<count($program); $i++) {
            Program::insert([
                'title' => $program[$keys[$i]],
                'code' => $keys[$i]
            ]);
        }
        
    }
}
