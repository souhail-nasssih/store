<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status'];

    /**
     * Get the user that owns the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the comments for the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function DetailsCommande(): HasMany
    {
        return $this->hasMany(DetailCommande::class);
    }
}
