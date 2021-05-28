<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    public function getRouteKeyName() {
        return 'slug';
    }

    /**
     * Relación muchos a muchos con BlogPost
     */
    public function posts() {
        return $this->belongsToMany(BlogPost::class);
    }

    /**
     * Relación uno a uno polimórfica con BlogImage
     */
    public function image() {
        return $this->morphOne(BlogImage::class, 'imageable');
    }
}
