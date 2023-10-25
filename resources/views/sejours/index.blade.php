@extends('welcome')

@section('content')
    <div style="margin-top: 50px;"></div>
    <div class="container-fluid">
        <div class="row">
            <h1>Liste des séjours</h1>
        </div>
        <div class="d-flex justify-content-between">
            <form class="d-flex" action="{{ route('sejour.index') }}" method="get" accept-charset="UTF-8" role="search">
                <input class="form-control me-2" type="search" name="search" value="{{ request()->search }}"
                    placeholder="Recherche" aria-label="Search">
                <button class="btn btn-primary" type="submit">Recherche</button>
            </form>
            <a href="{{ route('sejour.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i>
                Ajouter un sejour
            </a>
        </div>

        <table class="table">
            <thead class="">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom du logement</th>
                    <th scope="col">Nom du voyageur</th>
                    <th scope="col">Prénom du voyageur</th>
                    <th scope="col">Image du logement</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($sejours as $sejour)
                    <tr>
                        <th scope="row">{{ $sejour->id_sejour }}</th>
                        <td>{{ $sejour->logement->nom }}</td>
                        <td>{{ $sejour->voyageur->nom }}</td>
                        <td>{{ $sejour->voyageur->prenom }} </td>
                        <td>
                            {{-- {{ $sejour->logement->photo }} --}}
                            <img src="{{ asset('imageLogement/' . $sejour->logement->photo) }}" width="50" height="50"
                                style="border-radius: 100%;" alt="" srcset="">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('sejour.edit', $sejour->id_sejour) }}">
                                {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                                Modifier
                            </a>

                            <a class="btn btn-danger" href="#delete{{ $sejour->id_sejour }}" data-bs-toggle="modal"
                                type="button">
                                {{-- <i class="fa-solid fa-trash-can"></i> --}}
                                Supprimer

                            </a>
                        </td>
                    </tr>
                    @include('sejours.delete')
                @endforeach
            </tbody>
        </table>
    </div>
        @if (count($sejours) > 0)
            <div style="float: right; margin-right:50px;">
                {{ $sejours->links() }}
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center">
                <p class="">Pas de sejours.</p>
            </div>
        @endif
@endsection
