@extends('template.main')




@section('content')
<div class="container mb-5">
    <h1 class="text-uppercase text-center mt-2 mb-5">détails Equipe</h1>
    <div class="d-flex">
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title  text-center text-decoration-underline">Données équipe:</h5>
                <h5 class="card-title  text-center">ID: {{$equipe->id}}</h5>
                <h6 class="card-subtitle mb-2 text-muted text-center">Nom de club: <span>{{$equipe->nom_club}}</span></h6>
                <p class="card-text text-center">Ville: <span>{{$equipe->ville}}</span></p>
                <p class="card-text text-center">Joueurs/Max Joueurs: <span>{{$equipe->joueurs()->count()}}/{{$equipe->max_joueurs}}</span></p>
                <div class="d-flex justify-content-center">
                <a href="{{route('equipes.edit',$equipe->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
                <form action="{{route('equipes.destroy',$equipe->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger "><i class="fas fa-trash-alt"></i></button>
                </form>
                </div>
                <a href="{{route('equipes.index')}}" class="card-link d-flex justify-content-center ">Go back </a>
            </div>
        </div>

        <div class="col">
            <h2 class=" text-center">Listes des joueurs</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">role</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($equipe->joueurs()->get() as $joueur )

      <tr>
        <th scope="row">{{$joueur->id}}</th>
        <td>{{$joueur->nom}}</td>
        <td>{{$joueur->prenom}}</td>
        <td>{{$joueur->role->nom}}</td>
        <td>
            <a href="{{route('joueurs.show',$joueur->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
        </td>
      </tr>
      @endforeach

  </tbody>
</table>
        </div>
    </div>
</div>

@endsection