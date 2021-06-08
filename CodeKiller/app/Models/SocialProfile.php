<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'social_id', 'social_name', 'social_avatar'];

    /**
     * Relacion uno a muchos "inversa" con Usuario
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
