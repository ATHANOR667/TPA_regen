@extends('TPA.base_form')
@section('title','inscription_pro')

@section('content')
    <form action="" method="post">
        @csrf

        <!-- formulaire inscription professionel -->


        <h3 class="h3c">Creation du compte pro</h3>

        <div class="formc">

            <!--  EMAIL -->
            <div class="input-container2">
                <input class="inputc" type="email" name="email" id=""  value="{{old('email')}}"  required>
                <label class="labelc" for="email">Email</label>
                @error('email')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  MOT DE PASSE -->
            <div class="input-container2">
                <input type="password" name="password" id="" class="inputc" required>
                <label class="labelc" for="password">Mot de passe</label>
                @error('password')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>
            <button class="submit2 button" onclick="verifie()">Connexion</button>
        </div>

    </form>

@endsection
