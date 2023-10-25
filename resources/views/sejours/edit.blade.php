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
        <h1>Modifier un séjour</h1>
    </div>
    <div class="form">
        <form action="{{ route('sejour.update', $sejour->id_sejour) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Nom et prénom du voyageur</label>
                <select name="id_voyageur" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    <option value="{{$sejour->voyageur->id_voyageur}}">{{ $sejour->voyageur->nom }} {{ $sejour->voyageur->prenom }}</option>
                    @foreach ($voyageurs as $voyageur)
                        @if ($sejour->voyageur->id_voyageur == $voyageur->id_voyageur)
                            {{-- <option value="{{$voyageur->id_voyageur}}">{{ $voyageur->nom }} {{ $voyageur->prenom }}</option> --}}
                        @else
                            <option value="{{$voyageur->id_voyageur}}">{{ $voyageur->nom }} {{ $voyageur->prenom }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Nom du logement</label>
                <select name="id_code" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    <option value="{{$sejour->logement->code}}">{{ $sejour->logement->nom }}</option>
                    @foreach ($logements as $logement)
                        @if ($sejour->logement->code == $logement->code)
                            
                        @else
                            <option value="{{$logement->code}}">{{ $logement->nom }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date de debut</label>
                <input type="date" id="form1Example1" value="{{$sejour->debut}}" name="debut" placeholder="Date de debut"
                    class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date de fin</label>
                <input type="date" id="form1Example1" value="{{$sejour->fin}}" name="fin" placeholder="Date de fin"
                    class="form-control" />
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </div>
        </form>
    </div>
@endsection
