<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Photo;
use App\Models\Equipe;

class Joueur extends Model
{
    use HasFactory;
    protected $table = "joueurs";
    protected $fillable = ["nom","prenom","age","tel","email","genre","pays_origine"];


    public function roles(){
        return $this->hasOne(Role::class);
    }
    public function photos(){
        return $this->hasOne(Photos::class);
    }
    public function equipes(){
        return $this->belongsTo(Equipe::class);
    }
}