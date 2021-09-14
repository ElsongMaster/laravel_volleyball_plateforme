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

         $playerWithTeam =joueur::all()->where('equipe_id','!=',NULL)->take(4);

        $fullTeam = Equipe::all();
        $playersRandom = joueur::all()->random()->where('equipe_id','=',NULL)->get()->take(4);
        $playersMaleWithTeam = Joueur::all()->where('genre','=','M')->where('equipe_id','!=',NULL)->take(5);
       $playersRandomWithTeam = joueur::all()->random()->where('equipe_id','<>',NULL)->get()->take(5);
        return view('pages.home',compact('fullTeam','count','playersRandom','playerWithTeam','playersRandomWithTeam','playersMaleWithTeam'));
    }
}
