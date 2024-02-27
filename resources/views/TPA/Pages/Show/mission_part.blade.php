@php use App\Models\professionnel; @endphp
@extends('TPA.base_form')
@section('title','Afficher  mission particulier')

@section('content')
    <div class="container2">
        @php
            $tel =  Professionnel::join('mission_particulier_professionnel', 'professionnels.id', '=', 'mission_particulier_professionnel.professionnel_id')
                  ->join('missions', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
                  ->where('missions.id', $mission->id)
                  ->select('professionnels.num_tel')
                  ->first();

            $pro = Professionnel::join('mission_particulier_professionnel', 'professionnels.id', '=', 'mission_particulier_professionnel.professionnel_id')
                  ->join('missions', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
                  ->where('missions.id', $mission->id)
                  ->select('professionnels.*')
                  ->first();
        @endphp
        <h3>{{$mission->intitule}}</h3>
        <p>Description : {{$mission->description}}</p>
        <p>Début : {{$mission->debut}}</p>
        <p>Fin : {{$mission->fin}}</p>
        <p>Fonction : {{$mission->fonction}}</p>
        <p>Remunération : {{$mission->remuneration}}</p>
        <p>Description du salaire : {{$mission->desc_rem}}</p>
        <p>Qualification : {{$mission->qualification}}</p>
        @if($mission->statut == 'acceptee')
            <p>Joindre au : {{$tel->num_tel}}</p>
        @endif
        @if($mission->statut !== 'en attente')
            <p>Statut : {{$mission->statut}}</p>
        @endif
        <p> <span> <a href="{{route('TPA.pro_show',['pro'=>$pro,'part'=>$part])}}">Propose a {{$pro->name}}</a></span></p>
    </div>


    @if($mission->statut == 'en attente')
        <a href="{{route('TPA.mission_modify',['part'=>$part,'mission'=>$mission])}}">Modifier la mission</a>
    @else
        <button><a href="{{route('TPA.mes_offres',['part'=>$part])}}"> Retour</a> </button>
    @endif

@endsection
