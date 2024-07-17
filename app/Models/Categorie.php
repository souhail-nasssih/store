<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;
    // nom description 
    protected $fillable = ['nom', 'description'];
    // relation entre categorie et produit
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
