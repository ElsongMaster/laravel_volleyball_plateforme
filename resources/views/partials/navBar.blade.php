<ul class="nav d-flex flex-column  m-2">
  <li class="nav-item"><a  href="{{route('home')}}" class="nav-link border  @if(request()->routeIs('home')) active @else '' @endif">Home</a></li>
<li class="nav-item"><a  href="{{route('equipes.index')}}" class="nav-link border  @if(request()->routeIs('equipes.index')) active @else '' @endif">Equipes</a></li>
  <li class="nav-item"><a  href="{{route('joueurs.index')}}" class="nav-link border  @if(request()->routeIs('joueurs.index')) active @else '' @endif">Joueurs</a></li>
</ul>