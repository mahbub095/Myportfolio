<?php

namespace Database\Seeders;

use App\Models\Softskill;
use Illuminate\Database\Seeder;

class SoftSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Softskill::create([
        	'softskillname'=>'Java',
            'softskillrating'=>'1'
            
        ]);
    }
}
