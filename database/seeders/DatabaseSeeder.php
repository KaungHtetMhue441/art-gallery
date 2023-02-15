<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\Artists\ArtistSeeder;
use Database\Seeders\Regions\RegionSeeder;
use Database\Seeders\ArtistTypes\ArtistTypeSeeder;
use Database\Seeders\ArtWorkCategories\ArtWorkCategorySeeder;

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
            ArtWorkCategorySeeder::class
        ]);
        // $this->call([
        //     RegionSeeder::class,
        //     ArtistTypeSeeder::class,
        //     ArtistSeeder::class
        // ]);
    }
}
