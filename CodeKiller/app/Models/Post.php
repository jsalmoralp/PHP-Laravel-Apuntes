<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
        return $this->belongsTo(Category::class);
    }

    /**
     * Relación muchos a muchos con BlogTag
     */
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Relación uno a uno polimórfica con BlogImage
     */
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
