@extends('TPA.base')

@section('nav')@endsection

@section('content')
    @foreach($missions as $mission)
        <div>
            <div class="divchoix"><h2 class="element">Mission en attente</h2></div>
            <div class="divchoix"><h3 class="element">Intitule : {{$mission->intitule}}</h3></div>
            <div class="divchoix"><h3 class="element">Fonction : {{$mission->fonction}}</h3></div>
            <div class="divchoix"><h3 class="element">Remuneration : {{$mission->remuneration}}</h3></div>
            <div class="divchoix"><a class="menu btnaffplus" href="{{route('TPA.mission_show')}}" class="element">Afficher plus</a></div>
        </div>
    @endforeach
@endsection
