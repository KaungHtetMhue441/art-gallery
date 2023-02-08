<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Artists\ArtistSeeder;
use Database\Seeders\ArtistTypes\ArtistTypeSeeder;
use Database\Seeders\Regions\RegionSeeder;
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
        $this->call([
            RegionSeeder::class,
            ArtistTypeSeeder::class,
            ArtistSeeder::class
        ]);
    }
}
