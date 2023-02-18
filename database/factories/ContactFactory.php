<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
      //      'name' => fake()->name(),
      //      'phoneNumber' => $this->faker->numerify('##########'),
      //      'user_id' => $this->faker->randomElement(User::pluck('id')),
        ];
    }
}
