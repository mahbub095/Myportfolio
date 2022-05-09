<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resume::create([
            'edutitle' => 'SSC',
            'univerisity' => 'Ghatail Gano High School',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'sessions' => '2008-2009',
        ]);
        
        Resume::create([
            'edutitle' => 'HSC',
            'univerisity' => 'Ghatail Gano Colleges School',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'sessions' => '2008-2009',
        ]);
    }
}
