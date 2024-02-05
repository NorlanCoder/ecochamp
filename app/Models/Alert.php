<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alert extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom',
        'date_remarque',
        'image_principale',
        'image1',
        'image2',
        'image3',
        'image4',
        'description',
        'alert_type',
        'solution',
        'link_facebook',
        'link_linkedin',
        'link_tiktok',
        'link_instagram',
        'link_twitter',
        'interventions',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
