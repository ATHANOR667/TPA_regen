@extends('TPA.base_form')
@section('title','Afficher mission professionnel')

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
    <form action="" method="post">
        @csrf
        <button type="submit" name="statut" value="acceptee">Accepter</button>
        <button type="submit" name="statut" value="refusee">Refuser</button>
    </form>
    @else
    <button><a href="{{route(back())}}"> Retour</a> </button>
    @endif
@endsection
