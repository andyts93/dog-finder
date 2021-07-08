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
            'description' => $this->faker->paragraphs(rand(3, 10), true),
            'dog_name' => $this->faker->firstName,
            'dog_age' => $this->faker->randomNumber(2),
            'dog_breeds' => [],
            'main_image' => $image,
            'region_id' => rand(1,20)
        ];
    }
}
