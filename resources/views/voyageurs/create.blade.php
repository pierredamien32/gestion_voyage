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

        <form action="{{route('voyageur.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Nom</label>
                <input type="text" id="form1Example1" name="nom" placeholder="Nom du voyageur" class="form-control" />
            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Prénom</label>
                <input type="text" id="form1Example2" name="prenom" placeholder="Prénom du voyageur" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Ville</label>
                <input type="text" id="form1Example1" name="ville" placeholder="Ville du voyageur" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Région</label>
                <input type="text" id="form1Example1" name="région" placeholder="Région du voyageur" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Sexe</label>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" checked type="radio" name="sexe" id="inlineRadio1"
                        value="masculin">
                    <label class="form-check-label" for="inlineRadio1">Masculin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2"
                        value="féminin">
                    <label class="form-check-label" for="inlineRadio2">Féminin</label>
                </div>
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Créer</button>
            </div>
        </form>
    </div>
@endsection
