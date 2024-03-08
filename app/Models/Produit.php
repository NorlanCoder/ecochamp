<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    
    protected $fillable =[
        'nom',
        'description',
        'tags',
        'devise',
        'symbole_devise',
        'price',
        'image',
        'target',
        'user_id',
        'categorie_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function produitPanier(): HasMany
    {
        return $this->hasMany(ProduitPanier::class);
    }

}
