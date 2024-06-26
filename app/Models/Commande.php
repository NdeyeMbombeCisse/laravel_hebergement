<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Commande extends Model
{
    use HasFactory;

    protected $fillable=[
        'reference',
        'montant_total',
        'date_commande',
        'etat_commande',
        'user_id',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function produits(): BelongsToMany
    {
        return $this->belongsToMany(Produit::class, 'produit_commandes');          
    }
}
