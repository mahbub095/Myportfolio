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
            'webtitle' => 'Portfolio',
            'facebook' => 'https://www.facebook.com/mahbub.095',
            'twitter' => '#',
            'youtube' => '#',
            'instagram' => '#',
            'cv' => 'frontend/img/profile/2.jpg',
          'image' => 'frontend/img/profile/2.jpg'

        ]);
    }
}
