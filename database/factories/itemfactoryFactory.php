<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class itemfactoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'item_name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(1000, 100000),
            'category_id' => \App\Models\Category::factory(),
            'image_path' => null,
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
