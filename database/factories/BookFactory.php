<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'authorid'=>$this->faker->random_int(1,100),
            'title'=>$this->faker->sentence(5),
            'ISBN'=>$this->faker->isbn13(),
            'pub_year'=>$this->faker->random_int(1900,2022),
            'available'=>$this->faker->optional()->randomElement([null, 1]),
        ];
    }
}
