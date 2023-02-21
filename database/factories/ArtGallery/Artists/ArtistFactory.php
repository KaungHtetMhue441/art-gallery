<?php

namespace Database\Factories\ArtGallery\Artists;

use App\ArtGallery\Regions\Region;
use App\ArtGallery\ArtistTypes\ArtistType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\ArtGallery\Artists\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\ArtGallery\Artists\Artist::class;

    public function definition()
    {
        $filesPath = public_path('storage/artists');
        $array = explode('/',$this->faker->image($filesPath));
        $fileName = $array[count($array)-1];
        return [
            'name' => $this->faker->name,
            'profile_image' => $fileName,
            'social_url' => json_encode($this->faker->url()),
            'artist_type_id' => ArtistType::inRandomOrder()->first(),
            'region_id' => Region::inRandomOrder()->first()
        ];
    }
}
