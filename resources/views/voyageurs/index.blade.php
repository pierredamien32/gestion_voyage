@extends('welcome')

@section('content')
    <div style="margin-top: 50px;"></div>
    <div class="container-fluid">
        <div class="row">
            <h1>Liste des voyageurs</h1>
        </div>
        <div class="d-flex justify-content-between">
            <form class="d-flex" action="{{ route('voyageur.index') }}" method="get" accept-charset="UTF-8" role="search">
                <input class="form-control me-2" type="search" name="search" value="{{ request()->search }}"
                    placeholder="Recherche" aria-label="Search">
                <button class="btn btn-primary" type="submit">Recherche</button>
            </form>
            <a href="{{ route('voyageur.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i>
                Ajouter un voyageur
            </a>
        </div>

        <table class="table">
            <thead class="">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Région</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($voyageurs as $voyageur)
                    <tr>
                        <th scope="row">{{ $voyageur->id_voyageur }}</th>
                        <td>{{ $voyageur->nom }}</td>
                        <td>{{ $voyageur->prenom }}</td>
                        <td>{{ $voyageur->ville }} </td>
                        <td>{{ $voyageur->région }}</td>
                        <td>{{ $voyageur->sexe }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('voyageur.edit', $voyageur->id_voyageur) }}">
                                {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                                Modifier
                            </a>

                            <a class="btn btn-danger" href="#delete{{ $voyageur->id_voyageur }}" data-bs-toggle="modal"
                                type="button">
                                {{-- <i class="fa-solid fa-trash-can"></i> --}}
                                Supprimer

                            </a>
                        </td>
                    </tr>
                    @include('voyageurs.delete')
                @endforeach
            </tbody>
        </table>
    </div>
        @if (count($voyageurs) > 0)
            <div style="float: right; margin-right:50px;">
                {{ $voyageurs->links() }}
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center">
                <p class="">Pas de voyageurs.</p>
            </div>
        @endif
@endsection
