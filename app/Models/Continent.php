<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipe;

class Continent extends Model
{
    use HasFactory;

    protected $table = "continents";

    protected $fillable = ["nom"];

    public function equipes(){
        return $this->hasMany(Equipe::class);
    }
}
