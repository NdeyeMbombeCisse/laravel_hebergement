<?php

namespace App\Models;

use App\Models\Cathegorie;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User;

class Produit extends Model
{
    use HasFactory;
    protected $fillable=[
        'reference',
        'designation',
        'etat',
        'prix_unitaire',
        'url_img',
        'user_id',
        'cathegorie_id'

    ];
    public function cathegorie():BelongsTo{
        return $this->belongsTo(Cathegorie::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function commandes(): BelongsToMany
    {
        return $this->belongsToMany(Commande::class, 'commande_produit');
    }
}
