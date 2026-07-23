@extends('layouts.app')

@section('title')
    Liste des services
@endsection


@section('content')

<h1>Liste des services</h1>


<a href="{{ route('services.create') }}">
    Ajouter un service
</a>


<ul>

@forelse($services as $service)

    <li>

        {{ $service->nom }}
        - Responsable : {{ $service->responsable }}


        <a href="{{ route('services.show', $service) }}">
            Voir
        </a>


        <a href="{{ route('services.edit', $service) }}">
            Modifier
        </a>


        <form method="POST" action="{{ route('services.destroy', $service) }}">

            @csrf
            @method('DELETE')

            <button type="submit">
                Supprimer
            </button>

        </form>


    </li>


@empty

    <p>Aucun service</p>

@endforelse


</ul>


@endsection