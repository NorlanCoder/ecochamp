<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'debut',
        'fin',
        'couverture',
        'description',
        'activite_type',
        'besoin',
        'link_facebook',
        'link_linkedin',
        'link_tiktok',
        'link_instagram',
        'link_twitter',
        'interventions',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function activitable(): MorphTo
    {
        return $this->morphTo();
    }

    public function activityJoins(): HasMany
    {
        return $this->hasMany(Activityjoin::class);
    }
    
    public function comments(): HasMany
    {
        return $this->hasMany(CommentsActivities::class);
    }

}
