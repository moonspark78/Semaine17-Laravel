@extends('layouts.app')

@section('title')
    Liste des services
@endsection


@section('content')

<h1>Liste des services</h1>

<ul>

@forelse($services as $service)

    <li>
        {{ $service->nom }} 
        - Responsable : {{ $service->responsable }}

        <a href="{{ route('services.show', ['id' => $service->id]) }}">
            Voir le service
        </a>
    </li>


@empty

    <p>Aucun service pour l'instant</p>

@endforelse

</ul>

@endsection