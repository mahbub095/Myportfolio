<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        Service::create([
        	'title'=>'Selenium',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'icon'=>'frontend/img/profile/2.jpg'
        ]);
        
    }
}
