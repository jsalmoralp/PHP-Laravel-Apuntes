<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Relación uno a muchos (inversa) con User
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación uno a muchos (inversa) con BlogCategory
     */
    public function category() {
        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Relación muchos a muchos con BlogTag
     */
    public function tags() {
        return $this->belongsToMany(BlogTag::class);
    }

    /**
     * Relación uno a uno polimórfica con BlogImage
     */
    public function image() {
        return $this->morphOne(BlogImage::class, 'imageable');
    }
}
