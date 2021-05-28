<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName() {
        return 'slug';
    }

    /**
     * Relación uno a muchos con BlogPost
     */
    public function posts() {
        return $this->hasMany(BlogPost::class);
    }

    /**
     * Relación uno a uno polimórfica con BlogImage
     */
    public function image() {
        return $this->morphOne(BlogImage::class, 'imageable');
    }
}
