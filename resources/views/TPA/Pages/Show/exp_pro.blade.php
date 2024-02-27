@extends('TPA.base_form')
@section('title','Afficher  Experience professionnel')

@section('content')
    <div class="container2">
        <p>Fonction : {{$exp->fonction}}</p>
        <p>Début : {{$exp->debut}}</p>
        <p>Fin : {{$exp->fin}}</p>
        <p>Remunération : {{$exp->remuneration}}</p>
        <p>Description de la remuneration : {{$exp->desc_rem}}</p>
        <p>Qualification : {{$exp->qualification}}</p>
    </div>

    @if(session('message'))
        <div class="success-message">
            {{ session('message') }}
        </div><br>

        <a href="{{route('TPA.accueil_pro',['pro'=>$pro])}}">Retour</a>
    @else

        <a href="{{route('TPA.exp_modify',['exp'=>$exp,'pro'=>$pro])}}">Modifier experience</a>
    @endif
@endsection
