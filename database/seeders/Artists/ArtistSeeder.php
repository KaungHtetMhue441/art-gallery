<?php

namespace Database\Seeders\Artists;

use Illuminate\Database\Seeder;
use App\ArtGallery\Artists\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Artist::factory()->count(50)->create();
    }
}
