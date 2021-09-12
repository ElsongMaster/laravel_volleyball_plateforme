<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Continent;
use App\Models\Joueur;

class Equipe extends Model
{
    use HasFactory;
    protected $table = "equipes";
    protected $fillable = ["nom_club","ville","pays"];

    public function continents(){
        return $this->belongsTo(Continent::class);
    }
    public function joueurs(){
        return $this->hasMany(Joueur::class);
    }
}
