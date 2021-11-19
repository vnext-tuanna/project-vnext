<?php

namespace Database\Factories;

use App\Models\Manager;
use App\Models\Requests;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Requests::class;

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
            'user_id' => User::all()->random()->id,
            'manager_id' => Manager::all()->random()->id,
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'status' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
