@extends('TPA.base_form')
@section('title','Modifier experience')

@section('content')
    <form action="" method="post">
        @csrf

        <!-- formulaire modification  d'experience-->

        <h3 class="h3c">Proposer une exp </h3>

        <div class="formc">

            <!--  FONCTION-->
            <div class="input-container2">
                <input class="inputc" type="text" name="fonction" id=""  value="{{$exp->fonction}}"  required>
                <label class="labelc" for="fonction">Fonction</label>
                @error('fonction')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>



            <!--  DEBUT-->
            <div class="input-container2">
                <input class="inputc" type="date" name="debut" id=""  value="{{$exp->debut}}"  required>
                <label class="labelc" for="debut">Debut</label>
                @error('debut')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  FIN-->
            <div class="input-container2">
                <input class="inputc" type="date" name="fin" id=""  value="{{$exp->fin}}"  required>
                <label class="labelc" for="fin">Fin</label>
                @error('fin')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>



            <!--  REMUNERATION-->
            <div class="input-container2">
                <input class="inputc" type="number" name="remuneration" id=""  value="{{$exp->remuneration}}"  required>
                <label class="labelc" for="remuneration">Remuneration</label>
                @error('remuneration')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  DESC REM-->
            <div class="input-container2">
                <input class="inputc" type="text" name="desc_rem" id=""  value="{{$exp->desc_rem}}"  required>
                <label class="labelc" for="desc_rem">Description du revenu</label>
                @error('desc_rem')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!-- QUALIFICATION-->
            <div class="input-container2">
                <input class="inputc" type="text" name="qualification" id=""  value="{{$exp->qualification}}"  required>
                <label class="labelc" for="qualification">QUALIFICATION</label>
                @error('qualification')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>
            <button class="submit2 button" onclick="verifie()">Soumettre</button>
        </div>

    </form>

@endsection
