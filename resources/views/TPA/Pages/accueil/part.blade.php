@extends('TPA.base')
@section('title','accueil particulier')
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
    <div class="container77">
        <div class="block4" >
            @foreach($exps as $exp)
                <a href="{{route('TPA.liste_pro',['part'=>$part,'fonction'=>$exp->fonction])}}">
                <div class="element22">
                    <p class="element">{{$exp->fonction}}</p>
                </div>
                </a>
            @endforeach
        </div>
        <div class="block2">
            <div class="divinfoprofile">
                <div class="profile"></div>
                <div class="infoprofil">
                    <h2>Profile</h2>
                    <p>Nom : {{$part->name}}</p>
                    <p>Prenom : {{$part->prenom}}</p>
                    <p>Notes : {{$part->note}}</p>
                </div>
            </div>
            <div>
                <h2 class="titlestat">Stat</h2>
                <div class="stat">
                    <h3>propositions faites</h3>
                    <div class="statinfo"><h2>{{$part->prop_mission}}</h2></div>
                    <h3>proposition acceptee</h3>
                    <div class="statinfo"><h2>{{$part->prop_acceptee}}</h2></div>
                </div>

            </div>
        </div>
    </div>
@endsection
