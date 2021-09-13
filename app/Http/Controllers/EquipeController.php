<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Continent;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Equipe::all();
        return view('pages.allEquipes',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        return view('equipes.create',compact('continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
             request()->validate([
            "nom_club"=>["required","min:1","max:100"],
            "ville"=>["required"],
            "pays"=>["required"],
            "max_joueurs"=>["required","numeric"],
            "continent_id"=>["required"],
        ]);
        $newEntry = new Equipe;
        $newEntry->nom_club = $rq->nom_club;
        $newEntry->ville = $rq->ville;
        $newEntry->pays = $rq->pays;
        $newEntry->max_joueurs = $rq->max_joueurs;
        $newEntry->continent_id = $rq->continent_id;

        $newEntry->save();

        return redirect()->route('equipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view('equipes.show',compact('equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        $continents = Continent::all();

        return view('equipes.edit',compact('equipe','continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Equipe $equipe)
    {
             request()->validate([
            "nom_club"=>["required","min:1","max:100"],
            "ville"=>["required"],
            "pays"=>["required"],
            "max_joueurs"=>["required","numeric"],
            "continent_id"=>["required"],
        ]);
        $equipe->nom_club = $rq->nom_club;
        $equipe->ville = $rq->ville;
        $equipe->pays = $rq->pays;
        $equipe->max_joueurs = $rq->max_joueurs;
        $equipe->continent_id = $rq->continent_id;

        $equipe->save();

        return redirect()->route('equipes.show',$equipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();

        return redirect()->route('equipes.index');
    }
}
