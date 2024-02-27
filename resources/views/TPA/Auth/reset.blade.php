@extends('TPA.base_form')
@section('title','reset')

@section('content')
    <form action="" method="post">
        @csrf

        <!-- formulaire connexion -->


        <h3 class="h3c">Password reset</h3>


            <!--  MOT DE PASSE -->
            <div class="input-container2">
                <input type="password" name="password" id="" class="inputc" required>
                <label class="labelc" for="password">entrez votre nouveu mot de passe</label>
                @error('password')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>
            <button class="submit2 button" onclick="verifie()">Soumettre</button>
        </div>


    </form>

@endsection
