<?php

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
        $this->call(\Database\Seeders\MoodSeeder::class);
        $this->call(\Database\Seeders\UTypeSeeder::class);
//        $this->call(RequestStatusesSeeder::class);
//        $this->call(UserTypeSeeder::class);
//        $this->call(MoodStatusesSeeder::class);
    }
}
