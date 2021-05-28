<?php

namespace Database\Factories;

use App\Models\BlogTag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        return [
            'name'  => $name,
            'slug'  => Str::slug($name),
            'color' => $this->faker->randomElement(['red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'])
        ];
    }
}
