<?php

namespace Database\Factories;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Boolean;

class IssueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Issue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => $this->faker->text(10),
            'status' => true,
            'priority' => true,
            'file_id' => random_int(1, 7),
            'project_id' => random_int(1, 7),
            'reporter_id' => 2,
            'assigned_id' => random_int(1, 7),
            'dashboard_id' => random_int(1, 7)
        ];
    }
}
