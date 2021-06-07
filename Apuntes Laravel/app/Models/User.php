<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Código que recupera la imagen del usuario.
     */
    public function adminlte_image() {
        $social_profile = $this->socialProfiles->first();
        if($social_profile) {
            return $social_profile->social_avatar;

        } else {
            // TODO: Recuperar la imagen del usuario
            return 'https://picsum.photos/300/300';
        }
    }

    /**
     * Código que recupera una descripción del usuario.
     * Pudiendo ser el rol que tiene asignado.
     */
    public function adminlte_desc() {
        // TODO: Recuperar la descripción del usuario

        return 'Administrador';
    }

    /**
     * Código que recupera el link del perfil del usuario.
     */
    public function adminlte_profile_url() {
        // TODO: Recuperar el link del perfil del usuario

        return 'profile/username';
    }

    /**
     * Relacion uno a muchos con Post
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }

    /**
     * Relacion uno a muchos con el Perfil Social
     */
    public function socialProfiles() {
        return $this->hasMany(SocialProfile::class);
    }
}
