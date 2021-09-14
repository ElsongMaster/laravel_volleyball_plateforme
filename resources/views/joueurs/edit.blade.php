@extends('template.main')




@section('content')
 <div class="container d-flex flex-column mb-5 w-75">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Joueur</h1>

<form action="{{route('joueurs.update',$joueur->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" value = "{{$joueur->nom}}" class="form-control" id="nom" name="nom">
</div>

<div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" value = "{{$joueur->prenom}}"  class="form-control" id="prenom" name="prenom" >
</div>


<div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" value = "{{$joueur->age}}"  class="form-control" id="age" name="age" >
</div>

<div class="mb-3">
    <label for="tel" class="form-label">Numéro de téléphone</label>
    <input type="text" value = "{{$joueur->tel}}"  class="form-control" id="tel" name="tel" >
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="Email" value = "{{$joueur->email}}"  class="form-control" id="email" name="email" >
</div>
<div class="mb-3">
    <label for="genre" class="form-label">Genre</label>
    <input type="text" value = "{{$joueur->genre}}"  class="form-control" id="genre" name="genre" >
</div>

<div class="mb-3">
    <label for="pays_origine" class="form-label">Pays d'origine</label>
    <input type="text" value = "{{$joueur->pays_origine}}"  class="form-control" id="pays_origine" name="pays_origine" >
</div>
<div class="mb-3">
    <label for="photo" class="form-label">Photo</label>
    <input type="file"   class="form-control" id="photo" name="photo" >
</div>

<div class="mb-3">
    <label for="role_id" class="form-label">Role</label>
<select name="role_id" id="role_id">
    @foreach ($roles as $role )
    @if($joueur->role_id === $role->id)
    <option selected value="{{$role->id}}">{{$role->nom}}</option>
    @else
    <option value="{{$role->id}}">{{$role->nom}}</option>
    @endif
        
    @endforeach
</select>
</div>
<div class="mb-3">
    <label for="equipe_id" class="form-label">Equipe</label>
<select name="equipe_id" id="equipe_id">
    @foreach ($equipes as $equipe )
        
    @if($joueur->equipe_id === $equipe->id)
    <option selected value="{{$equipe->id}}">{{$equipe->nom_club}}</option>
    @else
    <option value="{{$equipe->id}}">{{$equipe->nom_club}}</option>
    @endif
    @endforeach
</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>   
@endsection