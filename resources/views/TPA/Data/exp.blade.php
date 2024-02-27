@extends('TPA.base_form')
@section('title','Ajout experience')

@section('content')
    <form action="" method="post">
        @csrf

        <!-- formulaire d'ajout  d'experience-->


        <h3 class="h3c">Ajout D'experience</h3>

        <div class="formc">


            <!--  FONCTION-->
            <div class="input-container2">
                <input class="inputc" type="text" name="fonction" id=""  value="{{old('fonction')}}"  required>
                <label class="labelc" for="fonction">Fonction</label>
                @error('fonction')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  DEBUT-->
            <div class="input-container2">
                <input class="inputc" type="date" name="debut" id=""  value="{{old('debut')}}"  required>
                <label class="labelc" for="debut">Debut</label>
                @error('debut')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  FIN-->
            <div class="input-container2">
                <input class="inputc" type="date" name="fin" id=""  value="{{old('fin')}}"  required>
                <label class="labelc" for="fin">Fin</label>
                @error('fin')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  REMUNERATION-->
            <div class="input-container2">
                <input class="inputc" type="number" name="remuneration" id=""  value="{{old('remuneration')}}"  required>
                <label class="labelc" for="remuneration">Remuneration</label>
                @error('remuneration')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  DESC REM-->
            <div class="input-container2">
                <input class="inputc" type="text" name="desc_rem" id=""  value="{{old('desc_rem')}}"  required>
                <label class="labelc" for="desc_rem">Description du salaire</label>
                @error('desc_rem')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!-- QUALIFICATION-->
            <div class="input-container2">
                <input class="inputc" type="text" name="qualification" id=""  value="{{old('qualification')}}"  required>
                <label class="labelc" for="qualification">QUALIFICATION</label>
                @error('qualification')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>
            <button class="submit2 button" onclick="verifie()">Connexion</button>
        </div>

    </form>

@endsection
