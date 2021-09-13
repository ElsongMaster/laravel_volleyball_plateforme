<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Equipe;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Joueur::all();
        return view('pages.allJoueurs',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $equipes = Equipe::all();
        return view('joueurs.create', compact('roles','equipes'));
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
            "nom"=>["required","min:1","max:100"],
            "prenom"=>["required","min:1","max:100"],
            "age"=>["required","numeric"],
            "tel"=>["required","min:1","max:100"],
            "email"=>["required","min:1","max:100"],
            "genre"=>["required"],
            "pays_origine"=>["required"],
            "role_id"=>["required"],
        ]);
        $newEntry = new Joueur;
        $newEntry->nom = $rq->nom;
        $newEntry->prenom = $rq->prenom;
        $newEntry->age = $rq->age;
        $newEntry->email = $rq->email;
        $newEntry->genre = $rq->genre;
        $newEntry->pays_origine = $rq->pays_origine;
        $newEntry->role_id = $rq->role_id;
        $newEntry->equipe_id = $rq->equipe_id;
        $newEntry->save();
        $photo = new Photo;
        $photo->url = $rq->url;
        $photo->joueur_id = $newEntry->id;

        $photo->save();

        $rq->file("photo")->storePublicly("img","public");

        return redirect()->route('joueurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view('joueurs.show',compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        
        $roles = Role::all();
        $equipes = Equipe::all();
        return view('joueurs.edit', compact('joueur','roles','equipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Joueur $joueur)
    {
             request()->validate([
            "nom"=>["required","min:1","max:100"],
            "prenom"=>["required","min:1","max:100"],
            "age"=>["required","numeric"],
            "tel"=>["required","min:1","max:100"],
            "email"=>["required","min:1","max:100"],
            "genre"=>["required"],
            "pays_origine"=>["required"],
            "role_id"=>["required"],
        ]);

        $joueur->nom = $rq->nom;
        $joueur->prenom = $rq->prenom;
        $joueur->age = $rq->age;
        $joueur->email = $rq->email;
        $joueur->genre = $rq->genre;
        $joueur->pays_origine = $rq->pays_origine;
        $joueur->role_id = $rq->role_id;
        $joueur->equipe_id = $rq->equipe_id;

        Storage::disk("public")->delete("img/".$joueur->photo->url);
        $joueur->photo->url =  $rq->file('photo')->hashName();
        $joueur->photo->save();
        $joueur->save();

        $rq->file("photo")->storePublicly("img","public");

        return redirect()->route('joueurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        Storage::disk("public")->delete("img/".$joueur->photo->url);
        
        $joueur->delete();
        $joueur->photo->delete();

        return redirect()->back();
    }
}
