<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory('blog/posts');
        Storage::makeDirectory('blog/posts');

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        BlogCategory::factory(4)->create();
        BlogTag::factory(8)->create();
        $this->call(BlogPostSeeder::class);
    }
}
