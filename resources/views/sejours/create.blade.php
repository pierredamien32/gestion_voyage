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
        <h1>Ajout d'un séjour</h1>
    </div>
    <div class="form">
        <form action="{{ route('sejour.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Nom et prénom du voyageur</label>
                <select name="id_voyageur" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    @foreach ($voyageurs as $voyageur)
                        <option value="{{$voyageur->id_voyageur}}">{{ $voyageur->nom }} {{ $voyageur->prenom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Nom du logement</label>
                <select name="id_code" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    @foreach ($logements as $logement)
                        <option value="{{$logement->code}}">{{ $logement->nom }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date de debut</label>
                <input type="date" id="form1Example1" name="debut" placeholder="Date de debut"
                    class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date de fin</label>
                <input type="date" id="form1Example1" name="fin" placeholder="Date de fin"
                    class="form-control" />
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Créer</button>
            </div>
        </form>
    </div>
@endsection
