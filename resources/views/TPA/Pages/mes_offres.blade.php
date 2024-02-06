@extends('TPA.base')

@section('nav')
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="75">
            <text x="10" y="55" font-family="Arial, sans-serif" font-size="45" font-weight="bold" fill="#333">
                T
            </text>
            <text x="52.5" y="55" font-family="Arial, sans-serif" font-size="45" font-weight="bold" fill="#333">
                P
            </text>
            <text x="95" y="55" font-family="Arial, sans-serif" font-size="45" font-weight="bold" fill="#333">
                A
            </text>
        </svg>
    </div>
    <div class="divmenu">
        <ul class="ulmenu">
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.accueil_part',['part'=>$part])}}">Accueil</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.about',['user'=>$part])}}">A propos</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.contact',['user'=>$part])}}">Contact</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.mes_offres',['part'=>$part])}}">Mes offres</a></li>

        </ul>
    </div>

    <li class="livmenu2"><a class="divmenu2"><img class="imgmenu" src="img/white-arrow-png-41944.png" alt=""></a>
        <ul class="ulsoumenu">
            <li class="lisousmenu" > <form action="{{ route('TPA.logout') }}" method="POST">@csrf @method('DELETE')<button class="sousmenu" type="submit">Se déconnecter</button></form></li>
            <li class="lisousmenu"><a class="sousmenu" href="{{route('TPA.login_pro',['part'=>$part])}}">Section pro</a></li>
        </ul>
    </li>
@endsection

@section('content')
    @section('content')
        <div CLASS="container8" >
            <div class="block8" >
                @foreach($missions as $mission)
                    <div>
                        <div class="divchoix"><h2 class="element">Mission en attente</h2></div>
                        <div class="divchoix"><h3 class="element">Intitule : {{$mission->intitule}}</h3></div>
                        <div class="divchoix"><h3 class="element">Fonction : {{$mission->fonction}}</h3></div>
                        <div class="divchoix"><h3 class="element">Remuneration : {{$mission->remuneration}}</h3></div>
                        <div class="divchoix"><a class="menu btnaffplus" href="{{route('TPA.mission_show_part',['mission'=>$mission,'part'=>$part])}}" class="element">Afficher plus</a></div>
                    </div>

                @endforeach
            </div>


            <div class="block8" >
                @foreach($missions_r as $mission_r)
                    <div>
                        <div class="divchoix"><h2 class="element">Mission refusee</h2></div>
                        <div class="divchoix"><h3 class="element">Intitule : {{$mission_r->intitule}}</h3></div>
                        <div class="divchoix"><h3 class="element">Fonction : {{$mission_r->fonction}}</h3></div>
                        <div class="divchoix"><h3 class="element">Remuneration : {{$mission_r->remuneration}}</h3></div>
                        <div class="divchoix"><a class="menu btnaffplus" href="{{route('TPA.mission_show_part',['mission'=>$mission,'part'=>$part])}}" class="element">Afficher plus</a></div>
                    </div>

                @endforeach
            </div>



            <div class="block8" >
                @foreach($missions_a as $mission_a)
                    <div>
                        <div class="divchoix"><h2 class="element">Mission acceptee</h2></div>
                        <div class="divchoix"><h3 class="element">Intitule : {{$mission_a->intitule}}</h3></div>
                        <div class="divchoix"><h3 class="element">Fonction : {{$mission_a->fonction}}</h3></div>
                        <div class="divchoix"><h3 class="element">Remuneration : {{$mission_a->remuneration}}</h3></div>
                        <div class="divchoix"><h3 class="element">Remuneration : {{$mission_a->remuneration}}</h3></div>
                        <div class="divchoix"><a class="menu btnaffplus" href="{{route('TPA.mission_show_part',['mission'=>$mission,'part'=>$part])}}" class="element">Afficher plus</a></div>
                    </div>

                @endforeach
            </div>
        </div>
    @endsection
@endsection
