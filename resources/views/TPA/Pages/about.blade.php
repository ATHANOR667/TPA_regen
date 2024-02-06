@extends('TPA.base')
@section('title','A propos')

@section('nav')

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="75">
            <text x="10" y="55" font-family="Arial, sans-serif" font-size="45" font-weight="bold" fill="blueviolet">
                T
            </text>
            <text x="52.5" y="55" font-family="Arial, sans-serif" font-size="45" font-weight="bold" fill="blueviolet">
                P
            </text>
            <text x="95" y="55" font-family="Arial, sans-serif" font-size="45" font-weight="bold" fill="blueviolet">
                A
            </text>
        </svg>
    </div>
    <div class="divmenu">
        <ul class="ulmenu">
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.accueil_part',['part'=>$part])}}">Accueil</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.about',['user'=>$user])}}">A propos</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.contact',['user'=>$user])}}">Contact</a></li>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="400" height="200">
            <text x="20" y="140" font-family="Arial, sans-serif" font-size="120" font-weight="bold" fill="blueviolet">
                T
            </text>
            <text x="140" y="140" font-family="Arial, sans-serif" font-size="120" font-weight="bold" fill="blueviolet">
                P
            </text>
            <text x="260" y="140" font-family="Arial, sans-serif" font-size="120" font-weight="bold" fill="blueviolet">
                A
            </text>
        </svg>
        <h2>À propos de TPA (The Placement Agency)</h2>
        <p>TPA est une agence de placement renommée spécialisée dans la recherche et la sélection de talents qualifiés pour les entreprises de divers secteurs.</p>
        <p>Notre mission est de faciliter la connexion entre les employeurs à la recherche de professionnels compétents et les candidats à la recherche de nouvelles opportunités de carrière.</p>
        <p>Nous nous engageons à fournir des services de qualité supérieure en mettant en œuvre des processus de recrutement rigoureux et en établissant des relations solides avec nos clients et nos candidats.</p>
        <p>Que vous soyez une entreprise à la recherche de talents ou un professionnel à la recherche d'un emploi, TPA est là pour vous aider à atteindre vos objectifs.</p>
        <p>Contactez-nous dès aujourd'hui pour discuter de vos besoins en recrutement ou pour explorer les opportunités de carrière.</p>
        <p>Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs exigences spécifiques en matière de recrutement et pour sélectionner les meilleurs candidats correspondant à leurs besoins.</p>
        <p>Avec notre vaste réseau de professionnels qualifiés, nous sommes en mesure de fournir des solutions de recrutement efficaces et adaptées aux besoins de chaque entreprise.</p>
        <p>Nos services comprennent la recherche et l'évaluation des candidats, la coordination des entretiens, la vérification des références et l'assistance dans le processus d'embauche.</p>
        <p>Notre équipe de recruteurs expérimentés est dévouée à fournir des résultats exceptionnels et à établir des relations à long terme avec nos clients.</p>
        <p>Nous nous engageons à respecter les normes les plus élevées d'éthique professionnelle et de confidentialité dans toutes nos interactions avec les clients et les candidats.</p>
        <p>TPA est fière d'avoir aidé de nombreuses entreprises à trouver les bons talents et d'avoir aidé de nombreux professionnels à trouver des opportunités de carrière enrichissantes.</p>
        <p>Nous sommes impatients de pouvoir vous aider également dans votre recherche de talents ou d'emploi.</p>
        <p>Contactez-nous dès maintenant et découvrez comment TPA peut vous aider à atteindre vos objectifs de recrutement ou de carrière.</p>
        <p>Nous sommes là pour vous accompagner à chaque étape du processus et pour vous fournir des solutions de placement personnalisées et efficaces.</p>
        <p>Faites confiance à TPA pour vos besoins de placement et découvrez pourquoi nous sommes l'une des agences de placement les plus respectées du secteur.</p>
        <p>Nous espérons avoir l'opportunité de travailler avec vous et de vous aider à réussir dans vos projets de recrutement et de carrière.</p>
        <p>Commencez dès maintenant et contactez TPA pour des services de placement de qualité supérieure.</p>
        <p>Nous nous réjouissons de collaborer avec vous et de vous aider à atteindre vos objectifs.</p>
        <p>TPA - Votre partenaire de confiance en matière de placement professionnel.</p>
    </div>
@endsection
