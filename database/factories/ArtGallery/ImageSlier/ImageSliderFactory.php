<?php

namespace Database\Factories\ArtGallery\ImageSlider;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\ArtGallery\ImageSlider\ImageSlider>
 */
class ImageSliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $filesPath = public_path('storage\image-slider');
        $array = explode('/',$this->faker->image($filesPath));
        $fileName = $array[count($array)-1];

        return [
            'name' => $fileName,
            'image_url' => $fileName,
        ];
    }
}
