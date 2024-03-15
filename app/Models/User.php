<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'sexe',
        'phone',
        'localite',
        'intervations',
        'profile',
        'statut',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function activities(): MorphMany
    {
        return $this->morphMany(Activite::class, 'activitable');
    }

    public function postes(): MorphMany
    {
        return $this->morphMany(Post::class, 'postable');
    }

    public function alertys(): MorphMany
    {
        return $this->morphMany(Alert::class, 'alertable');
    }

    public function alerts(): HasMany
    {
        return $this->hasMany(Alert::class);
    }

    public function activites(): HasMany
    {
        return $this->hasMany(Activite::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function panier(): HasOne
    {
        return $this->hasOne(Panier::class);
    }

    public function paiements(): HasMany
    {
        return $this->hasMany(Paiement::class);
    }

    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }

}
