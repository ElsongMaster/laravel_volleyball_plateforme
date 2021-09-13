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


 <h1 class="text-center my-3"> Update Equipe</h1>

<form action="{{route('equipes.update',$equipe->id)}}" method="post">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="nom_club" class="form-label">Nom de club</label>
    <input type="text" value = "{{$equipe->nom_club}}" class="form-control" id="nom_club" name="nom_club">
</div>

<div class="mb-3">
    <label for="ville" class="form-label">Ville</label>
    <input type="text" value ="{{$equipe->ville}}"   class="form-control" id="ville" name="ville" >
</div>
<div class="mb-3">
    <label for="pays" class="form-label">Pays</label>
    <input type="text" value ="{{$equipe->pays}}" class="form-control" id="pays" name="pays" >
</div>

<div class="mb-3">
    <label for="max_joueurs" class="form-label">Maximum de joueurs</label>
    <input type="number" value = "{{$equipe->max_joueurs}}"  class="form-control" id="max_joueurs" name="max_joueurs" >
</div>
<div class="mb-3">
    <label for="continent_id" class="form-label">Continent: </label>
<select name="continent_id" id="continent_id">
    @foreach ($continents as $continent )
    @if ($continent->id === $equipe->continent_id)
    <option selected value="{{$continent->id}}">{{$continent->nom}}</option>
        
    @else
        
    <option value="{{$continent->id}}">{{$continent->nom}}</option>
    @endif
    @endforeach
</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>   
@endsection