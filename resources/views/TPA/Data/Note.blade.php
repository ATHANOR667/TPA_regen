@extends('TPA.base_form')
@section('title','Retour sur mission')

@section('content')
    <form action="" method="post">
        @csrf

        <!-- formulaire notation fin de mission-->

        <h3 class="h3c"> Votre avis compte </h3>

        <div class="formc">

            <!--  INTITULE -->
            <div class="input-container2">
                <input class="inputc" type="number" name="note" id=""  value="{{old('note')}}" >
                <label class="labelc" for="note">Note</label>
                @error('note')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  DESCRIPTION-->

            <div class="input-container2">
                <textarea class="inputc" id="description" name="description" rows="4" cols="50" value="{{old('description')}}"  >

                </textarea>
                <label class="labelc" for="description">Laissez un commentaire</label>
                @error('description')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>
        </div>
        <button class="submit2 button" onclick="verifie()">Soumettre</button>

    </form>

@endsection
