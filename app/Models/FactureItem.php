<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FactureItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'prix',
        'prix_tva',
        'tva',
        'facture_id'
    ];

    protected $with = [
        'facture',
    ];

    public function facture(): BelongsTo
    {
        return $this->belongsTo(Facture::class);
    }
}
