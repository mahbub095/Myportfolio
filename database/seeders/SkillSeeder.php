<?php

namespace Database\Seeders;

use App\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
        	'name'=>'Time Management',
            'percent'=>'50'
            
        ]);
        
    }
}
