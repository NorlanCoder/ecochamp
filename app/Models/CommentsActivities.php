<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentsActivities extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'image',
        'activite_id',
        'user_id'
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
