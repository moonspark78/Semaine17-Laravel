@extends('layouts.app')

@section('title')
    Service
@endsection


@section('content')


<h1>Détail du service</h1>


<h2>
    {{ $service->nom }}
</h2>


<p>
    Responsable :
    {{ $service->responsable }}
</p>


<p>
    Téléphone :
    {{ $service->telephone }}
</p>


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


<a href="{{ route('services.index') }}">
    Retour liste
</a>


@endsection