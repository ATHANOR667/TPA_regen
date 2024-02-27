@extends('TPA.base_form')
@section('title','reset pre process')

@section('content')
    <form action="" method="post">
        @csrf

        <!-- formulaire connexion -->


        <h3 class="h3c">Reset pre process</h3>

        <div class="formc">

            <!--  EMAIL -->
            <div class="input-container2">
                <input class="inputc" type="email" name="email" id=""  value="{{old('email')}}"  required>
                <label class="labelc" for="email">Email</label>
                @error('email')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            @if(session('message'))
              <div class="error-message" >
                  {{session('message')}}
              </div>
            @endif


            <button class="submit2 button" onclick="verifie()">Connexion</button>
        </div>

    </form>

@endsection
