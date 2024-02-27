@php use App\Models\professionnel@endphp
@extends('TPA.base')
@section('title','part show')

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
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.accueil_pro',['pro'=>$pro])}}">Accueil</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.about_pro',['pro'=>$pro])}}">A propos</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.contact_pro',['pro'=>$pro])}}">Contact</a></li>
            <li class="limenu"><div class="divicon"><img class="iconmenu" src="img/OIP.jpg" alt=""></div><a class="menu" href="{{route('TPA.mes_offres_recues',['pro'=>$pro])}}">Mes offres</a></li>
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
        <div class="block2" style="margin-left: 200px">
            <div class="divinfoprofile2">
                <div class="profile"></div>
                <div class="infoprofil">
                    <h2>Profil</h2>
                    <p>Nom : {{$part->name}} </p>
                    <p>Prenom : {{$part->prenom}}</p>
                </div>
            </div>

            <div class="container12" >
                <div class="scrollable-content">
                    <h1>      Commentaires :</h1>
                    @foreach($retours as $retour)
                        @php $prof = professionnel::find($retour->professionnel_id) @endphp
                        @if($retour->Desc_part_par_prof != null && $retour->note_part_par_prof!= null )
                            <div class="comment">
                                <div class="user"></div>
                                <div class="content">
                                    {{$retour->Desc_part_par_prof}}
                                </div>
                                <div class="rating">
                                    @for($i = $retour->note_part_par_prof ; $i > 0 ; $i--  )
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
            <h2 class="titlestat">Stat</h2>
            <div class="stat2">
                <h3>propositions faites</h3>
                <div class="statinfo2"><h2>{{$part->prop_mission}}</h2></div>
                <h3>proposition acceptee</h3>
                <div class="statinfo2"><h2>{{$part->prop_acceptee}}</h2></div>
            </div>
        </div>

    </div>
@endsection
