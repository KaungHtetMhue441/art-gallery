<?php

namespace Database\Seeders\ArtistTypes;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\ArtGallery\ArtistTypes\ArtistType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArtistType::truncate();
  
        $json = File::get(public_path().'/database/ArtistTypes.json');
        $regions = collect(json_decode($json));

        foreach ($regions as $key => $region) {
            ArtistType::create([
                "name" => $region->name,
            ]);
        }
    }
}
