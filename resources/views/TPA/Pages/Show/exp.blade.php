@extends('TPA.base_form')
@section('title','Afficher  Experience particulier')

@section('content')
    <div class="container2">
        <p>Fonction : {{$exp->fonction}}</p>
        <p>Début : {{$exp->debut}}</p>
        <p>Fin : {{$exp->fin}}</p>
        <p>Remunération : {{$exp->remuneration}}</p>
        <p>Description de la remuneration : {{$exp->desc_rem}}</p>
        <p>Qualification : {{$exp->qualification}}</p>
    </div>

    <a href="{{route(back())}}">Retour</a>

@endsection
