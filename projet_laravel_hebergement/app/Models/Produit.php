<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
