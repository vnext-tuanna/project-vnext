<?php

namespace Database\Factories;

use App\Models\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Request::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->name(),
            'content' => $this->faker->paragraph(2),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'to_user_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'status' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
