<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Joueur;
class Role extends Model
{
    use HasFactory;
    protected $table = "roles";

    protected $fillable = ["nom"];

    public function joueurs(){
        return $this->hasMany(Joueur::class);
    }


}
