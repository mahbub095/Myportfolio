<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'webtitle' => 'SEO',
            'facebook' => 'https://www.facebook.com/mahbub.095',
            'twitter' => 'https://www.facebook.com/mahbub.095',
            'youtube' => 'https://www.facebook.com/mahbub.095',
            'instagram' => 'https://www.facebook.com/mahbub.095',
            'cv' => 'frontend/img/profile/2.jpg',
          'image' => 'frontend/img/profile/2.jpg'

        ]);
    }
}
