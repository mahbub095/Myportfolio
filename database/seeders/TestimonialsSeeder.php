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
            'desination'=>'SQA Engineer',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'image'=>'frontend/img/profile/2.jpg'
        ]);
    }
}
