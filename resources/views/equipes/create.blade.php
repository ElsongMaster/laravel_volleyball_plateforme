@extends('template.main')




@section('content')
<div class="container d-flex flex-column w-75">
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


 <h1 class="text-center my-3"> Create Equipe</h1>

<form action="{{route('equipes.store')}}" method="post" enctype="multipart/form-data">
    @csrf


<div class="mb-3">
    <label for="nom_club" class="form-label">Nom de club</label>
    <input type="text" value = "{{old('nom_club')}}" class="form-control" id="nom_club" name="nom_club">
</div>

<div class="mb-3">
    <label for="ville" class="form-label">Ville</label>
    <input type="text" value = "{{old('ville')}}"  class="form-control" id="ville" name="ville" >
</div>
<div class="mb-3">
    <label for="pays" class="form-label">Pays</label>
    <input type="text" value = "{{old('pays')}}"  class="form-control" id="pays" name="pays" >
</div>

<div class="mb-3">
    <label for="max_joueurs" class="form-label">Maximum de joueurs</label>
    <input type="number" value = "{{old('max_joueurs')}}"  class="form-control" id="max_joueurs" name="max_joueurs" >
</div>
<div class="mb-3">
    <label for="continent_id" class="form-label">Continent</label>
<select name="continent_id" id="continent_id">
    @foreach ($continents as $continent )
        
    <option value="{{$continent->id}}">{{$continent->nom}}</option>
    @endforeach
</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>   
@endsection