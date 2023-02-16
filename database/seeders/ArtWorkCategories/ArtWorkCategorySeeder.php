<?php

namespace Database\Seeders\ArtWorkCategories;

use Illuminate\Database\Seeder;
use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtWorkCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArtWorkCategory::truncate();
        ArtWorkCategory::factory()->count(10)->create();
    }
}
