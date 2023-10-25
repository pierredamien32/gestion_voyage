<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejour extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_sejour",
        "debut",
        "fin",
        "id_voyageur",
        "code"
    ];

    protected $primaryKey = 'id_sejour';

    // on a ces deux fonctions (logement() et voyageur()) parcequ'ils sont des clés étrangère dans la table sejours
    public function logement(){
        return $this->belongsTo(Logement::class, 'code');
    }

    public function voyageur(){
        return $this->belongsTo(Voyageur::class, 'id_voyageur');
    }
}
