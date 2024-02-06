@extends('TPA.base')
@section('title','accueil etranger')
@section('nav')
    <div>
        <img class="img" src="img/OIP.jpg" alt="">
    </div>
    <div class="divmenu">
        <ul class="ulmenu">
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.accueil')}}">Accueil</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.about',['user'=>null])}}">A propos</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.contact',['user'=>null])}}">Contact</a></li>

        </ul>
    </div>
    <li class="livmenu2"><a class="divmenu2"><img class="imgmenu" src="img/white-arrow-png-41944.png" alt=""></a>
        <ul class="ulsoumenu">
            <li class="lisousmenu"><a class="sousmenu" href="{{route('TPA.login')}}">Se connecter</a></li>
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
        <h2>Bienvenue sur le site TPA  (The Placement Agency)</h2>
        Nous sommes ravis de vous accueillir sur notre plateforme dédiée à la mise en relation entre professionnels et particuliers. Chez TPA, nous comprenons l'importance de trouver les bons talents et les opportunités de carrière qui correspondent à vos besoins uniques.

        Que vous soyez un professionnel à la recherche de nouvelles opportunités d'emploi ou un particulier à la recherche d'une expertise spécifique, TPA est là pour faciliter vos démarches et vous aider à trouver la personne idéale.

        Pour les professionnels :

        TPA vous offre un espace dédié pour présenter vos compétences, votre expérience et vos réalisations professionnelles. Notre plateforme vous permet de vous connecter avec des employeurs potentiels du monde entier qui recherchent vos talents spécifiques. Développez votre réseau professionnel, consultez les offres d'emploi et trouvez la carrière qui vous passionne.

        Pour les particuliers :

        Si vous avez besoin d'une expertise spécifique pour un projet ou une tâche, TPA vous permet de trouver des professionnels qualifiés dans divers domaines. Que ce soit pour une aide ponctuelle ou un projet à long terme, notre plateforme vous permet de trouver la personne idéale pour combler vos besoins.

        Chez TPA, nous nous engageons à faciliter le processus de recrutement et de mise en relation. Nous mettons l'accent sur la qualité des profils et veillons à ce que chaque connexion soit pertinente et productive.

        Inscrivez-vous dès maintenant sur TPA et découvrez un monde de possibilités en matière de placement professionnel. Notre équipe est là pour vous accompagner tout au long de votre parcours et répondre à toutes vos questions.

        Si vous avez des questions supplémentaires ou avez besoin d'assistance, n'hésitez pas à nous contacter. Nous sommes là pour vous aider à trouver les meilleures opportunités de placement.
</div>
@endsection
