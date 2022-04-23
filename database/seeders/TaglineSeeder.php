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
        	'tag_line'=>'Mahbub',
            'description'=>'Test Web Developer',
            'image'=>'frontend/img/profile/2.jpg',
        ]);
        
    
      
    }
}
