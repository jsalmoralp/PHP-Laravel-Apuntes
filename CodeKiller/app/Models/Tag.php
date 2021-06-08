<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    public function getRouteKeyName() {
        return 'slug';
    }

    /**
     * Relación muchos a muchos con Post
     */
    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    /**
     * Relación uno a uno polimórfica con BlogImage
     */
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
