@extends('layouts.app')

@section('title')
    Modifier un service
@endsection


@section('content')

<h1>Modifier un service</h1>


<form method="POST" action="{{ route('services.update', $service) }}">

    @csrf
    @method('PUT')


    <div>
        <label>Nom :</label>

        <input type="text" name="nom" value="{{ $service->nom }}">
    </div>


    <br>


    <div>
        <label>Responsable :</label>

        <input type="text" name="responsable" value="{{ $service->responsable }}">
    </div>


    <br>


    <div>
        <label>Téléphone :</label>

        <input type="text" name="telephone" value="{{ $service->telephone }}">
    </div>


    <br>


    <button type="submit">
        Modifier
    </button>


</form>


<a href="{{ route('services.index') }}">
    Retour
</a>


@endsection