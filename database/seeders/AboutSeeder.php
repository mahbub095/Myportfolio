<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'name' => 'John Smith',
            'dob'=>'15-12-1994',
            'mail'=>'admin@gmail.com',
            'phone'=>'',
            'address'=>'Dhaka',
            'nationality'=>'Bangladeshi',
        'title'=>'Desire to be a part of a vibrant and leading organization and create footprints as a Quality assurance
        Engineer,',
        'subtitle'=>'Desire to be a part of a vibrant and leading organization',
        'description'=>'Desire to be a part of a vibrant and leading organization and create footprints as a Quality assurance
        Engineer, to assist the organizations in all aspects by utilizing all my skills, knowledge, abilities, and
        experience with a balance of hands-on, management, and leadership responsibilities.',
        'cv'=>'',
        'image'=>''
        ]);
    }
}
