<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailCommande extends Model
{
    use HasFactory;

    protected $fillable = ['commande_id', 'produit_id', 'quantite'];

    public function panier(): BelongsTo
    {
        return $this->belongsTo(Panier::class);
    }
    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }

}
