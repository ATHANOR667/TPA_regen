@extends('TPA.base')
@section('title','accueil professionnel')
@section('nav')
    <div>
        <img class="img" src="img/OIP.jpg" alt="">
    </div>
    <div class="divmenu">
        <ul class="ulmenu">
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.accueil_pro',['pro'=>$pro])}}">Accueil</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.about')}}">A propos</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.contact')}}">Contact</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.mes_offres_recues',['pro'=>$pro])}}">Mes offres</a></li>
        </ul>
    </div>
    <li class="livmenu2"><a class="divmenu2"><img class="imgmenu" src="img/white-arrow-png-41944.png" alt=""></a>
        <ul class="ulsoumenu">
            <li class="lisousmenu" > <form action="{{ route('TPA.logout') }}" method="POST">@csrf @method('DELETE')<button class="sousmenu" type="submit">Se déconnecter</button></form></li>
        </ul>
    </li>
@endsection

@section('content')
    <div class="container">
        <div class="block1">
            <h2><a href="{{route('TPA.experience',['pro'=>$pro])}}">Ajouter une experience</a></h2>
            @foreach($exps as $exp)
                <div class="divchoix"><h2 class="element">Fonction : {{$exp->fonction}}</h2></div>
                <div class="divchoix"><h3 class="element">De: {{$exp->debut}}</h3></div>
                <div class="divchoix"><h3 class="element">A: {{$exp->fin}}</h3></div>
                <div class="divchoix"><a  href="{{route('TPA.experience_show',['pro'=>$pro])}}" class="element">Afficher plus</a></div>
            @endforeach
        </div>
        <div class="block2">
            <div class="divinfoprofile">
                <div class="profile"></div>
                <div class="infoprofil">
                    <h2>Profile</h2>
                    <p>Nom : {{$pro->name}}</p>
                    <p>Prenom : {{$pro->prenom}}</p>
                    <p>Notes : {{$pro->note}}</p>
                </div>
            </div>
            <div>
                <h2 class="titlestat">Stat</h2>
                <div class="stat">
                    <h3>propositions recues</h3>
                    <div class="statinfo"><h2>{{$pro->prop_recue}}</h2></div>
                    <h3>propositions acceptee</h3>
                    <div class="statinfo"><h2>{{$pro->prop_acceptee}}</h2></div>
                </div>

            </div>
        </div>

    </div>
@endsection
