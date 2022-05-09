<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tagline;

class TaglineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tagline::create([
        	'tag_line'=>'Mahbubur Rahman',
            'description'=>'Desire to be a part of a vibrant and leading organization and create footprints as a Quality assurance
            Engineer, to assist the organizations in all aspects by utilizing all my skills, knowledge, abilities, and
            experience with a balance of hands-on, management, and leadership responsibilities.',
            'image'=>'frontend/img/profile/2.jpg',
        ]);
        
    
      
    }
}
