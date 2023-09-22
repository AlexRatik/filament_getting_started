<?php

namespace Database\Factories;

use App\Models\Owner;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['cat' ,'dog', 'rabbit'];

        return [
            'name' => fake()->name(),
            'date_of_birth' => fake()->date(),
            'owner_id' => fake()->numberBetween(1, 20),
            'type' => Base::randomElement($types)
        ];
    }
}
