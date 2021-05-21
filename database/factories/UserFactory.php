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
            'user_name'=>$this->faker->unique()->userName,
            'file_id' => 6,
            'project_id' => 5,
            'e-mail'=> $this->faker->unique()->safeEmail,
            'password'=> bcrypt($this->faker->streetName),
            'remember_token'=> Str::random(10)
        ];
    }
}
