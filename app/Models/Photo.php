<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Joueur;

class Photo extends Model
{
    use HasFactory;
    protected $table = "photos";

    protected $fillable = ["url"];

    public function joueur(){
        return $this->belongsTo(Joueur::class);
    }
}
