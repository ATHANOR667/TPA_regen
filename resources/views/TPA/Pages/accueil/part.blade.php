@extends('TPA.base')
@section('title','accueil particulier')
@section('nav')
    <div>
        <img class="img" src="img/OIP.jpg" alt="">
    </div>
    <div class="divmenu">
        <ul class="ulmenu">
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="">Accueil</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="">A propos</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="">Contact</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="">Mes offres</a></li>

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
    <div class="container">
        <div class="block1" >
            @foreach($exps as $exp)
                <div class="divchoix">
                    <p class="element"><a href="{{route('TPA.liste_pro',['part'=>$part,'fonction'=>$exp->fonction])}}">{{$exp->fonction}}</a></p>
                </div>
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
                    <div class="statinfo"><h2>{{$part->prop_mission}}</h2></div>
                    <div class="statinfo"><h2>{{$part->prop_acceptee}}</h2></div>
                </div>

            </div>
        </div>
    </div>
@endsection
