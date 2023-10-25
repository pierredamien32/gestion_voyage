<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "nom",
        "capacite",
        "type",
        "lieu",
        "photo",
        "disponibilite"
    ];

    protected $primaryKey = 'code';

    public function sejours(){
        return $this->hasMany(Sejour::class);
    }
}
