@extends('template.main')




@section('content')
<div class="container d-flex justify-content-center align-items-center mt-1 mb-5">
<div class="container d-flex flex-column align-items-center">
    <h1 class="text-center text-uppercase my-2 text-decoration-underline px-2">Détail joueur</h1>
    <div class="card" style="width: 18rem;">
    @if (Storage::disk('public')->exists('img/'.$joueur->photo->url))
    
    <img src="{{asset('img/'.$joueur->photo->url)}}" class="card-img-top" alt="...">
    @else
    
    <img src="{{$joueur->photo->url}}" class="card-img-top" alt="...">
    @endif
      <div class="card-body">
        <h5 class="card-title"><span class="text-decoration-underline">ID:</span><span class="text-primary">{{$joueur->id}}</span></h5>
        <p class="card-text  "><span class="text-decoration-underline">Nom:</span> <span class="text-primary">{{$joueur->nom}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Prenom:</span><span class="text-primary"> {{$joueur->prenom}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Age:</span> <span class="text-primary">{{$joueur->age}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Tel:</span><span class="text-primary"> {{$joueur->tel}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Email:</span><span class="text-primary"> {{$joueur->email}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Genre:</span><span class="text-primary"> {{$joueur->genre}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Pays origine:</span><span class="text-primary"> {{$joueur->pays_origine}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Rôle:</span><span class="text-primary"> {{$joueur->role->nom}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Equipe:</span><span class="text-primary"> <a href="{{route('equipes.show',$joueur->equipe->id)}}" id=" team" class="text-decoration-none"> {{$joueur->equipe->nom_club}} <i class="fas fa-eye"></i> </a></span></p>


 
        <div class="d-flex flex-column align-items-center">

            <div class="d-flex justify-content-center">
                    <a href="{{route('joueurs.edit',$joueur->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
                    <form action="{{route('joueurs.destroy',$joueur->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
                    </form>
            </div>
                    <a href="{{route('joueurs.index')}}" class="btn btn-primary">Go back</a>
        </div>
        
      </div>
</div>
</div>

@endsection