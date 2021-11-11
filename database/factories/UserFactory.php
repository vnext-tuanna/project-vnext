<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->email(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'google_id' => '1',
            'facebook_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'password' => bcrypt('123'),
            'position_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'division_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'follow_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'role' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
