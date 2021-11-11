<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph(2),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'to_user_id' => $this->faker->numberBetween($min = 1, $max = 4),
        ];
    }
}
