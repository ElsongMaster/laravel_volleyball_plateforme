@extends('template.main')



@section('content')
<div class="container mb-5">

    <h1 class="text-uppercase text-center my-3">Les équipes</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom club</th>
          <th scope="col">Ville</th>
          <th scope="col">Nb_joueurs</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($datas as $data )
              
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->nom_club}}</td>
            <td>{{$data->ville}}</td>
            <td>{{$data->joueurs()->count()}}/{{$data->max_joueurs}}</td>
            <td>
                <a href="{{route('equipes.show',$data->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
            </td>
          </tr>
          @endforeach
    
      </tbody>
    </table>
      <div class="container d-flex justify-content-center">
      
          <a href="{{route('equipes.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
        
</div>
@endsection