@php use App\Models\particulier @endphp
@extends('TPA.base')
@section('title','pro show')

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
    <div class="main">
        <div class="container12" >
            <div class="scrollable-content">
                @foreach($exps as $exp)
                    <div class="divexp" >
                        <div>
                            <H2>Experience</H2>
                            <p>Fonction : {{$exp->fonction}}</p>
                            <p>Debut :{{$exp->debut }}</p>
                            <p>Fin :{{$exp->fin }}</p>
                            <p>Qualification :{{$exp->qualification }}</p>
                            <p>Remuneration :{{$exp->remuneration }}</p>
                            <p>Description remuneration :{{$exp->desc_rem }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="block2">
            <div class="divinfoprofile2">
                <div class="profile"></div>
                <div class="infoprofil">
                    <h2>Profil</h2>
                    <p>Nom : {{$pro->name}} </p>
                    <p>Prenom : {{$pro->prenom}}</p>
                </div>
            </div>

            <div class="container12" >
                <div class="scrollable-content">
                    <h1>      Commentaires :</h1>
            @foreach($retours as $retour)
                @php $par = particulier::find($retour->particulier_id) @endphp
                @if($retour->Desc_prof_par_part != null && $retour->note_prof_par_part!= null )
                    <div class="comment">
                        <div class="user">{{$par->name}}</div>
                        <div class="content">
                            {{$retour->Desc_prof_par_part}}
                        </div>
                        <div class="rating">
                            @for($i = $retour->note_prof_par_part ; $i > 0 ; $i--  )
                                <span class="star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.18 22 9.82 17 14 18.18 21 12 17.77 5.82 21 7 14 2 9.82 8.18 12 12 6.82 15.09 2 12 7.77 8.18 6.82 2 12 5.82 17.18 2"/></svg></span>
                            @endfor
                        </div>
                    </div>
                @endif
            @endforeach
                </div>
            </div>
        </div>
        <div class="container11">
            <a href="{{route('TPA.mission',['part'=> $part, 'pro'=>$pro])}}"><button class="y-button">Proposer une mission</button></a>

            <h2 class="titlestat">Stat</h2>
            <div class="stat2">
                <h3>propositions recue</h3>
                <div class="statinfo2"><h2>{{$pro->prop_recue}}</h2></div>
                <h3>proposition acceptee</h3>
                <div class="statinfo2"><h2>{{$pro->prop_acceptee}}</h2></div>
            </div>
        </div>

    </div>
@endsection
