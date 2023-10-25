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
        <h1>Ajout d'un logement</h1>
    </div>
    <div class="form">

        <form action="{{route('logement.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Nom</label>
                <input type="text" id="form1Example1" name="nom" placeholder="Nom du logement" class="form-control" />
            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Capacité</label>
                <input type="number" id="form1Example2" name="capacite" placeholder="Nombre de personnes" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Type</label>
                <input type="text" id="form1Example1" name="type" placeholder="Type du logement" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Lieu</label>
                <input type="text" id="form1Example1" name="lieu" placeholder="Lieu du logement" class="form-control" />
            </div>

            <div class="mb-4">
                <label for="formFile" class="form-label">Choisir une photo</label>
                <input class="form-control" name="file" type="file" id="formFile">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Disponibilité</label>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" checked type="radio" name="disponibilite" id="inlineRadio1"
                        value="oui">
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disponibilite" id="inlineRadio2"
                        value="non">
                    <label class="form-check-label" for="inlineRadio2">Non</label>
                </div>
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Créer</button>
            </div>
        </form>
    </div>
@endsection
