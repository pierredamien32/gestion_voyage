<style>
    .form {
        display: flex;
        /* flex-direction: column; */
        justify-content: center;
        align-content: center;
        margin-top: 20px;
    }
</style>
@extends('welcome')

@section('content')
    <div class="form">
        <h1>Ajout d'un voyageur</h1>
    </div>
    <div class="form">

        <form action="{{route('voyageur.update', $voyageur->id_voyageur)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Nom</label>
                <input type="text" id="form1Example1" name="nom" value="{{$voyageur->nom}}"  placeholder="Nom du voyageur" class="form-control" />
            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Prénom</label>
                <input type="text" id="form1Example2" name="prenom" value="{{$voyageur->prenom}}" placeholder="Prénom du voyageur" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Ville</label>
                <input type="text" id="form1Example1" name="ville" value="{{$voyageur->ville}}" placeholder="Ville du voyageur" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Région</label>
                <input type="text" id="form1Example1" name="région" value="{{$voyageur->région}}" placeholder="Région du voyageur" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Sexe</label>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input"  type="radio" name="sexe" id="inlineRadio1"
                        value="{{$voyageur->sexe}}" {{$voyageur->sexe == "masculin" ? 'checked' : ''}}>
                    <label class="form-check-label" for="inlineRadio1">Masculin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2"
                        value="{{$voyageur->sexe}}" {{$voyageur->sexe == "féminin" ? 'checked' : ''}}>
                    <label class="form-check-label" for="inlineRadio2">Féminin</label>
                </div>
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </div>
        </form>
    </div>
@endsection
