<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fileable_id' => random_int(0, 10),
            'fileable_type' => 'App//Models//Issue',
            'file_name' => 'lala',
            'file_type' => 'img',
            'content' => $this->faker->image(),
        ];
    }
}
