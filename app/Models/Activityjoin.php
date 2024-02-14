<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activityjoin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activite_id',
        'interested',
        'participation',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function activite(): BelongsTo
    {
        return $this->belongsTo(Activite::class);
    }

    
}
