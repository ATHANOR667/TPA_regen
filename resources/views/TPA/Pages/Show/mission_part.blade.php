@extends('TPA.base_form')
@section('title','Afficher  mission particulier')

@section('content')
    <div class="container2">
        <h3>{{$mission->intitule}}</h3>
        <p>Description : {{$mission->description}}</p>
        <p>Début : {{$mission->debut}}</p>
        <p>Fin : {{$mission->fin}}</p>
        <p>Fonction : {{$mission->fonction}}</p>
        <p>Remunération : {{$mission->remuneration}}</p>
        <p>Description du salaire : {{$mission->desc_rem}}</p>
        <p>Qualification : {{$mission->qualification}}</p>
        @if($mission->statut !== 'en attente')
            <p>Statut : {{$mission->statut}}</p>
        @endif
    </div>


    @if($mission->statut == 'en attente')
        <a href="{{route('TPA.mission_modify',['part'=>$part,'mission'=>$mission])}}">Modifier la mission</a>
    @else
        <button><a href="{{route(back())}}"> Retour</a> </button>
    @endif

@endsection
