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
        <h1>Modification d'un logement</h1>
    </div>
    <div class="form">

        <form action="{{route('logement.update', $logement->code)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Nom</label>
                <input type="text" id="form1Example1" name="nom" value="{{$logement->nom}}" placeholder="Nom du logement" class="form-control" />
            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Capacité</label>
                <input type="number" id="form1Example2" name="capacite" value="{{$logement->capacite}}" placeholder="Nombre de personnes" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Type</label>
                <input type="text" id="form1Example1" name="type" value="{{$logement->type}}" placeholder="Type du logement" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Lieu</label>
                <input type="text" id="form1Example1" name="lieu" value="{{$logement->lieu}}" placeholder="Lieu du logement" class="form-control" />
            </div>
            <div class="mb-4">
                {{-- <label for="formFile" class="form-label">Image</label> --}}
                <img height="100" width="100" src="{{ asset('imageLogement/'.$logement->photo) }}" alt="image_bracelet" />
            </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">Choisir une photo</label>
                <input class="form-control" name="file" value="{{$logement->photo}}" type="file" id="formFile">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Disponibilité</label>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio"  name="disponibilite" id="inlineRadio1"
                        value="{{$logement->disponibilite}}" {{$logement->disponibilite == "oui" ? 'checked' : ''}}>
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disponibilite" id="inlineRadio2"
                        value="{{$logement->disponibilite}}" {{$logement->disponibilite == "non" ? 'checked' : ''}}>
                    <label class="form-check-label" for="inlineRadio2">Non</label>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">Modifier</button>
        </form>
    </div>
@endsection
