<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'facture_number',
    ];

    protected $with = [
        'factureItems',
    ];

    public function factureItems(): HasMany
    {
        return $this->hasMany(FactureItem::class);
    }

}
