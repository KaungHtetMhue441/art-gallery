<?php

namespace Database\Factories\ArtGallery\ArtWorkCategories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\ArtGallery\ArtWorkCategories\ArtWorkCategory>
 */
 class ArtWorkCategoryFactory extends Factory
{

protected $model = \App\ArtGallery\ArtWorkCategories\ArtWorkCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name
        ];
    }
}
