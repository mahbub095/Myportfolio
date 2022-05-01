<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
         $this->call(TaglineSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(SettingsSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(TestimonialsSeeder::class);
    }
}
