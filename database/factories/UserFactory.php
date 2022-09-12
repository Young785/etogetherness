<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender' => "female",
            'looking_for' => "male",
            'phone' => $this->faker->phoneNumber(),
            'other_name' => $this->faker->name(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'country' => $this->faker->country(),
            'nick_name' => $this->faker->name(),
            'seeking_age_from' => $this->faker->randomElement([18, 30]),
            'seeking_age_to' => $this->faker->randomElement([18, 30]),
            'age' => $this->faker->randomElement([18, 30]),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'user_type' => "user",
            'online_status' => "1",
            'last_seen' => now(),
            'other_name' => $this->faker->name(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
