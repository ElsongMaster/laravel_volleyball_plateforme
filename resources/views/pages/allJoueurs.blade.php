@extends('template.main')



@section('content')
<div class="container mb-5">

    <h1 class="text-uppercase text-center my-3">Les joueurs</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom </th>
          <th scope="col">Prénom</th>
          <th scope="col">Age</th>
          <th scope="col">Role</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($datas as $data )
              
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->nom}}</td>
            <td>{{$data->prenom}}</td>
            <td>{{$data->age}}</td>
            <td>{{$data->role->nom}}</td>
            {{-- {{dd($datas)}} --}}
            <td class="d-flex justify-content-evenly">
                <a href="{{route('joueurs.show',$data->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="{{route('joueurs.edit',$data->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <form action="{{route('joueurs.destroy',$data->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
    
      </tbody>
    </table>
      <div class="container d-flex justify-content-center">
      
          <a href="{{route('joueurs.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
        
</div>   
@endsection