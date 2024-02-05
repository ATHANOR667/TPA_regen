@extends('TPA.base_form',['title'=>'inscription particulier'])
@section('title','inscription particulier')

@section('content')
    <form action="" method="post">
        @csrf

        <!-- formulaire connexion -->


        <h3 class="h3c">Inscription</h3>

        <div class="formc">

            <!--  NAME -->
            <div class="input-container2">
                <input class="inputc" type="text" name="name" id=""  value="{{old('name')}}"  required>
                <label class="labelc" for="name">Nom d'utilisateur</label>
                @error('name')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  PRENOM -->
            <div class="input-container2">
                <input class="inputc" type="text" name="prenom" id=""  value="{{old('prenom')}}"  required>
                <label class="labelc" for="prenom">Prenom</label>
                @error('prenom')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>

            <!--  DATE_NAISS -->
            <div class="input-container2">
                <input class="inputc" type="date" name="date_naiss" id=""  value="{{old('date_naiss')}}"  required>
                @error('date_naiss')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>


            <!-- PAYS D'ORIGINE -->
            @php $pays = ["Afghanistan","Afrique du Sud","Albanie","Algérie","Allemagne","Andorre","Angola","Antigua-et-Barbuda","Arabie Saoudite","Argentine", "Arménie", "Australie", "Autriche", "Azerbaïdjan", "Bahamas", "Bahreïn", "Bangladesh", "Barbade", "Belgique", "Belize", "Bénin", "Bhoutan", "Biélorussie", "Bolivie", "Bosnie-Herzégovine", "Botswana", "Brésil", "Brunéi Darussalam", "Bulgarie", "Burkina Faso", "Burundi", "Cambodge", "Cameroun", "Canada", "Cap-Vert", "Chili", "Chine", "Chypre", "Colombie", "Comores", "Congo", "Costa Rica", "Côte d'Ivoire", "Croatie", "Cuba", "Danemark", "Djibouti", "Dominique", "Égypte", "Émirats arabes unis","Équateur", "Érythrée", "Espagne", "Estonie", "Eswatini", "États-Unis", "Éthiopie", "Fidji", "Finlande", "France", "Gabon", "Gambie", "Géorgie", "Ghana", "Grèce", "Grenade", "Guatemala", "Guinée", "Guinée équatoriale", "Guinée-Bissau", "Guyana", "Haïti", "Honduras", "Hongrie", "Îles Cook", "Îles Marshall", "Îles Salomon", "Inde", "Indonésie", "Iran", "Iraq", "Irlande", "Islande", "Israël", "Italie", "Jamaïque", "Japon", "Jordanie", "Kazakhstan", "Kenya", "Kirghizistan", "Kiribati", "Koweït", "Laos", "Lesotho", "Lettonie", "Liban", "Libéria", "Libye", "Liechtenstein", "Lituanie", "Luxembourg" ]@endphp
            <div class="input-container2">
                <select class="selectc" name="pays_origine" id="pays_origine" required>
                    @foreach ($pays as $pays_origine)
                        <option value="{{ $pays_origine }}" {{ old('pays_origine') == $pays_origine ? 'selected' : '' }}>
                            {{ $pays_origine }}
                        </option>
                    @endforeach
                </select>
                @error('pays_origine')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>


            <!-- VILLE D'HABITATION -->
            @php $villes = [ "Yaoundé", "Douala", "Bafoussam", "Garoua", "Bamenda", "Maroua", "Ngaoundéré", "Kribi", "Ebolowa", "Bertoua" ];@endphp
            <div class="input-container2">
                <select class="selectc" name="ville_habitation" id="ville_habitation" required>
                    @foreach ($villes as $ville_habitation)
                        <option value="{{ $ville_habitation }}" {{ old('ville_habitation') == $ville_habitation ? 'selected' : '' }}>
                            {{ $ville_habitation }}
                        </option>
                    @endforeach
                </select>
                @error('ville_habitation')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!--  NUM_CNI -->
            <div class="input-container2">
                <input type="number" name="num_cni" id="" class="inputc" required>
                <label class="labelc" for="num_cni">Numero de cni </label>
                @error('num_cni')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>


            <!--  NUM_TEL -->
            <div class="input-container2">
                <input type="number" name="num_tel" id="" class="inputc" required>
                <label class="labelc" for="num_tel">Numero de telephone</label>
                @error('num_tel')
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

            <!--  EMAIL -->
            <div class="input-container2">
                <input class="inputc" type="email" name="email" id=""  value="{{old('email')}}"  required>
                <label class="labelc" for="username">Email</label>
                @error('email')
                <span class="error-message" >{{$message}}</span>
                @enderror
            </div>
            <button class="submit2 button" onclick="verifie()">Connexion</button>
        </div>



        <a class="h3c" href="{{route('TPA.accueil')}}">Rester deconnecte</a>
    </form>

@endsection
