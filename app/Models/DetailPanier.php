<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPanier extends Model
{
    use HasFactory;

    protected $fillable = ['panier_id', 'produit_id', 'quantite'];


    /**
     * Get the user that owns the DetailPanier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function panier(): BelongsTo
    {
        return $this->belongsTo(Panier::class);
    }
    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
}
