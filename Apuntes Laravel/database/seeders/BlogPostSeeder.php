<?php

namespace Database\Seeders;

use App\Models\BlogImage;
use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = BlogPost::factory(300)->create();

        foreach ($posts as $post) {
            BlogImage::factory(1)->create([
                'imageable_id'      => $post->id,
                'imageable_type'    => BlogPost::class
            ]);

            $post->tags()->attach([
                rand(1,4),
                rand(5, 8)
            ]);
        }
    }
}
