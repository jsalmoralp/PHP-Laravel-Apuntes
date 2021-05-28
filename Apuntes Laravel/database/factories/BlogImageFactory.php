<?php

namespace Database\Factories;

use App\Models\BlogImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url'   => 'blog/posts/' . $this->faker->image(public_path('storage/blog/posts'), 640, 480, null, false)
        ];
    }
}
