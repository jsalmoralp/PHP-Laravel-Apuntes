<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostBlogTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_blog_tag', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('blog_post_id');
            $table->unsignedBigInteger('blog_tag_id');

            $table->foreign('blog_post_id')->references('id')->on('blog_posts')->onDelete('cascade');
            $table->foreign('blog_tag_id')->references('id')->on('blog_tags')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post_blog_tag');
    }
}
