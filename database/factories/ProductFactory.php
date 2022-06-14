<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->name(),
            'price' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'descriptions' => $this->faker->text(),
            'stock' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'image' => $this->faker->name(),

        ];
    }
}
