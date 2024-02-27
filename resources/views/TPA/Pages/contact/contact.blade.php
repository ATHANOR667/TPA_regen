@extends('TPA.base')
@section('title','Contact')

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
        <h1>Contactez-nous</h1>
        <p>Nous attachons une importance capitale aux retours de nos utilisateurs. Ils sont la pierre angulaire de notre développement continu et de l'amélioration de nos services. Notre équipe dévouée est disponible 24 heures sur 24, 7 jours sur 7, pour vous écouter et répondre à vos besoins.</p>

        <p>Nous comprenons que vos commentaires peuvent faire la différence dans l'évolution de notre plateforme. C'est pourquoi nous mettons tout en œuvre pour vous offrir un support de qualité et une réponse rapide, quels que soient vos problèmes ou vos suggestions.</p>

        <p>Nous vous invitons à nous contacter via nos différents canaux de communication. Nous sommes présents sur les réseaux sociaux les plus populaires pour vous tenir informés des dernières actualités, partager des conseils et des astuces, et répondre à vos questions en temps réel.</p>


        <h2>Réseaux sociaux :</h2>
        <ul>
            <li>
                <img class="logo" src="lien_vers_logo_instagram.png" alt="Logo Instagram">
                <a href="lien_vers_instagram">Instagram</a>
            </li>
            <li>
                <img class="logo" src="lien_vers_logo_facebook.png" alt="Logo Facebook">
                <a href="lien_vers_facebook">Facebook</a>
            </li>
            <li>
                <img class="logo" src="lien_vers_logo_twitter.png" alt="Logo Twitter">
                <a href="lien_vers_twitter">Twitter</a>
            </li>
            <li>
                <img class="logo" src="lien_vers_logo_threads.png" alt="Logo Threads">
                <a href="lien_vers_threads">Threads</a>
            </li>
        </ul>

        <h2>Email :</h2>
        <p>Pour nous contacter par email, veuillez envoyer un message à <a href="mailto:adresse_email">adresse_email</a>.</p>
    </div>
@endsection
