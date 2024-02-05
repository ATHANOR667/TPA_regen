@extends('TPA.base_form')
@section('title','login')

@section('content')
    <form action="{{ route('TPA.login_process') }}" method="post">
        @csrf

        <!-- formulaire connexion -->


            <h3 class="h3c">Connexion</h3>

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

            <!-- MESSAGE DE SUCCES OU PROPOSITION DE REDIRECTION -->
            @if(session('message'))
                <div class="success-message">
                    {{ session('message') }}
                </div>
            @else
                <h3 class="h3c"> Pas encore de compte ? :     <a class="h3c" href="{{route('TPA.inscription')}}"> S'inscrire </a> <br></h3>
            @endif

            <a class="h3c" href="{{route('TPA.accueil')}}">Rester deconnecte</a>
    </form>

@endsection






