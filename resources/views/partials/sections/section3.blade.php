<section>
    <h2 class=" text-center my-3">4 joueurs sans équipes au hasard</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom </th>
          <th scope="col">Prénom</th>
          <th scope="col">Age</th>
          <th scope="col">Tel</th>
          <th scope="col">Email</th>
          <th scope="col">Genre</th>
          <th scope="col">Pays d'origine</th>
          {{-- <th scope="col">Role</th>
          <th scope="col">Equipe</th> --}}
        </tr>
      </thead>
      <tbody>

          @foreach($playersRandom as $player )

                  
            <tr>
            <td>{{$player->nom}}</td>
            <td>{{$player->prenom}}</td>
            <td>{{$player->age}}</td>
            <td>{{$player->tel}}</td>
            <td>{{$player->email}}</td>
            <td>{{$player->genre}}</td>
            <td>{{$player->pays_origine}}</td>
            {{-- <td>{{$player->roles()->nom}}</td>
            <td>{{$player->equipes()->nom_club}}</td> --}}

            </tr>

 

          @endforeach
    
      </tbody>
    </table>
    
</section>