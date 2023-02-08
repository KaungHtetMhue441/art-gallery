<?php

namespace Database\Seeders\Regions;

use Illuminate\Database\Seeder;
use App\ArtGallery\Regions\Region;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::truncate();
  
        $json = File::get(public_path().'/database/Regions.json');
        $regions = collect(json_decode($json));

        foreach ($regions as $key => $region) {
            Region::create([
                "name" => $region->name,
                "name_mm" => $region->name_mm
            ]);
        }
    }
}
