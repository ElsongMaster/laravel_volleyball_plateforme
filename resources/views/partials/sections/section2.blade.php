<section class="my-5">
    <h2 class=" text-center my-3">2 equipes non remplites</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom club</th>
          <th scope="col">Ville</th>
          <th scope="col">pays</th>
          <th scope="col">Nb_joueurs</th>
          <th scope="col">Continent</th>
        </tr>
      </thead>
      <tbody>

          @foreach($fullTeam as $team )

              @if ($team->joueurs()->count() !==$team->max_joueurs && $count++<=1)
                  
              <tr>
                <th scope="row">{{$team->id}}</th>
                <td>{{$team->nom_club}}</td>
                <td>{{$team->ville}}</td>
                <td>{{$team->pays}}</td>
                <td>{{$team->joueurs()->count()}}/{{$team->max_joueurs}}</td>
                <td>{{$team->continent->nom}}</td>
    
              </tr>

              @endif

          @endforeach
    
      </tbody>
    </table>
    
</section>