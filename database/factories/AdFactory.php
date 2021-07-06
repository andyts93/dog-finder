<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = '';
        $result = json_decode(file_get_contents('https://dog.ceo/api/breeds/image/random'));
        if ($result->status === 'success') {
            $image = $result->message;
        }
        return [
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(),
            'dog_name' => $this->faker->firstName,
            'dog_age' => $this->faker->randomNumber(2),
            'dog_breeds' => [],
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'city' => $this->faker->city,
            'zip_code' => $this->faker->postcode,
            'main_image' => $image
        ];
    }
}
