@extends('welcome')

@section('content')
    <div style="margin-top: 50px;"></div>
    <div class="container-fluid">
        <div class="row">
            <h1>Liste des logements</h1>
        </div>
        <div class="d-flex justify-content-between">
            <form class="d-flex" action="{{ route('logement.index') }}" method="get" accept-charset="UTF-8" role="search">
                <input class="form-control me-2" type="search" name="search" value="{{ request()->search }}"
                    placeholder="Recherche" aria-label="Search">
                <button class="btn btn-primary" type="submit">Recherche</button>
            </form>
            <a href="{{ route('logement.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i>
                Ajouter un logement
            </a>
        </div>

        <table class="table">
            <thead class="">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Capacité</th>
                    <th scope="col">Type</th>
                    <th scope="col">Lieu</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Disponibilité</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($logements as $logement)
                    <tr>
                        <th scope="row">{{ $logement->code }}</th>
                        <td>{{ $logement->nom }}</td>
                        <td>{{ $logement->capacite }} personnes</td>
                        <td>{{ $logement->type }}</td>
                        <td>{{ $logement->lieu }}</td>
                        <td>
                            <img src="{{ asset('imageLogement/' . $logement->photo) }}" width="50" height="50"
                                style="border-radius: 100%;" alt="" srcset="">
                        </td>
                        <td>{{ $logement->disponibilite }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('logement.edit', $logement->code) }}">
                                {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                                Modifier
                            </a>

                            <a class="btn btn-danger" href="#delete{{ $logement->code }}" data-bs-toggle="modal"
                                type="button">
                                {{-- <i class="fa-solid fa-trash-can"></i> --}}
                                Supprimer

                            </a>
                        </td>

                    </tr>
                    @include('logements.delete')
                @endforeach
            </tbody>
        </table>
    </div>
    
        @if (count($logements) > 0)
            <div style="float: right; margin-right:50px;">
                {{ $logements->links() }}
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center">
                <p class="card-description">Pas de logements.</p>
            </div>
        @endif
    
@endsection
