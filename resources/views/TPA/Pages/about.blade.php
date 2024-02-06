@extends('TPA.base')
@section('title','A propos')

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
<div class="about-content">
    <h2>À propos de TPA (The Placement Agency)</h2>
    <p>TPA est une agence de placement renommée spécialisée dans la recherche et la sélection de talents qualifiés pour les entreprises de divers secteurs.</p>
    <p>Notre mission est de faciliter la connexion entre les employeurs à la recherche de professionnels compétents et les candidats à la recherche de nouvelles opportunités de carrière.</p>
    <p>Nous nous engageons à fournir des services de qualité supérieure en mettant en œuvre des processus de recrutement rigoureux et en établissant des relations solides avec nos clients et nos candidats.</p>
    <p>Que vous soyez une entreprise à la recherche de talents ou un professionnel à la recherche d'un emploi, TPA est là pour vous aider à atteindre vos objectifs.</p>
    <p>Contactez-nous dès aujourd'hui pour discuter de vos besoins en recrutement ou pour explorer les opportunités de carrière.</p>
</div>
@endsection
