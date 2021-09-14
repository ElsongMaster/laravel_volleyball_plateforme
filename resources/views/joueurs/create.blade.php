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



 <h1 class="text-center my-3"> Create Joueur</h1>

<form action="{{route('joueurs.store')}}" method="post" enctype="multipart/form-data">
    @csrf


<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" value = "{{old('nom')}}" class="form-control" id="nom" name="nom">
</div>

<div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" value = "{{old('prenom')}}"  class="form-control" id="prenom" name="prenom" >
</div>


<div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" value = "{{old('age')}}"  class="form-control" id="age" name="age" >
</div>

<div class="mb-3">
    <label for="tel" class="form-label">Numéro de téléphone</label>
    <input type="text" value = "{{old('tel')}}"  class="form-control" id="tel" name="tel" >
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="Email" value = "{{old('email')}}"  class="form-control" id="email" name="email" >
</div>
<div class="mb-3">
    <label for="genre" class="form-label">Genre</label>
    <input type="text" value = "{{old('genre')}}"  class="form-control" id="genre" name="genre" >
</div>

<div class="mb-3">
    <label for="pays_origine" class="form-label">Pays d'origine</label>
    <input type="text" value = "{{old('pays_origine')}}"  class="form-control" id="pays_origine" name="pays_origine" >
</div>
<div class="mb-3">
    <label for="photo" class="form-label">Photo</label>
    <input type="file"   class="form-control" id="photo" name="photo" >
</div>

    <div class="mb-3">
        <label for="role_id" class="form-label">Rôle</label>
        <select name="role_id" id="role_id">
            @foreach ($roles as $role )
            <option value="{{$role->id}}">{{$role->nom}}</option>   
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="equipe_id" class="form-label">Equipe</label>
        <select name="equipe_id" id="equipe_id">
            @foreach ($equipes as $equipe )
            <option value="{{$equipe->id}}">{{$equipe->nom_club}}</option>
            @endforeach
            <option selected value="">default</option>

        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>  
</div>   
   
@endsection