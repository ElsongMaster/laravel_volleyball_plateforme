<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joueur;
use App\Models\Equipe;
class HomeController extends Controller
{
    public function index(){
        $joueurs = new Joueur;
        $equipes = new Equipe;
        $count = 0;
        // $fullTeam = $equipes->join('joueurs','joueurs.equipe_id','=','equipes.id')->get()->groupBy('equipes.id');
        $fullTeam = Equipe::all();
        $playersRandom = joueur::all()->random()->where('equipe_id','=',NULL)->get();
       
        return view('pages.home',compact('fullTeam','count','playersRandom'));
    }
}
