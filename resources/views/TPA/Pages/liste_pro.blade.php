@extends('TPA.base')
@section('title','liste pro')

@section('nav')

    <div>
        <img class="img" src="img/OIP.jpg" alt="">
    </div>
    <div class="divmenu">
        <ul class="ulmenu">
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.accueil_part',['part'=>$part])}}">Accueil</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.about')}}">A propos</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.contact')}}">Contact</a></li>
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
    <div class="container2">
        <div class="block3"></div>
        <div class="block4">
            <section class="sousbloc1"></section>
            @foreach($pros as $pro)
                <div class="sousbloc1">
                    <h4>Nom: {{$pro->name}}</h4>
                    <h4>Ville : {{$pro->ville_habitation}}</h4>
                    <span> <a href="{{route('TPA.mission',['pro'=>$pro,'part'=>$part])}}">Proposer une mission</a></span>
                </div>

            @endforeach
        </div>
    </div>
@endsection
