<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];


    /**
     * Get the user that owns the Panier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the comments for the Panier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailsPanier(): HasMany
    {
        return $this->hasMany(DetailPanier::class);
    }
}