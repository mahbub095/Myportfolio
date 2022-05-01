<?php

namespace Database\Seeders;

use App\Models\Testimonials;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonials::create([
        	'name'=>'Mahbub',
            'desination'=>'Test Web Developer',
            'description'=>'Test',
            'image'=>'frontend/img/profile/2.jpg'
        ]);
    }
}
