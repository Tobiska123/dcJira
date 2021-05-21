<?php

namespace Database\Factories;

use App\Models\Solution;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 7),
            'issue_id' => random_int(1, 7),
            'desc' => $this->faker->streetAddress,
            'start_time' => $this->faker->dateTime,
            'end_Time' => $this->faker->dateTime
        ];
    }
}
