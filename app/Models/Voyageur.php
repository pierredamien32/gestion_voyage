<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyageur extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_voyageur",
        "nom",
        "prenom",
        "ville",
        "région",
        "sexe"
    ];

    protected $primaryKey = 'id_voyageur';

    public function sejours(){
        return $this->hasMany(Sejour::class);
    }
}
