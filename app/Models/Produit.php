<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['name','quantite', 'prix','id_cat'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class,"id_cat");
    }
}
