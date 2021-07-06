<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_ad()
    {
        $attributes = [
            'title' => 'Titolo',
            'description' => 'Descrizione lunga',
            'dog_name' => 'Spettro',
            'dog_age' => 7,
            'dog_breeds' => ['Pastore', 'Lupo'],
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'city' => $this->faker->city,
            'zip_code' => $this->faker->postcode
        ];
        $response = $this->post('/ad', $attributes);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('ads', $attributes);
    }
}
