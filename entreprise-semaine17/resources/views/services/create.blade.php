@extends('layouts.app')

@section('title')
    Ajouter un service
@endsection


@section('content')

<h1>Ajouter un service</h1>

<form method="POST" action="{{ route('services.store') }}">

    @csrf

    <div>
        <label>Nom :</label>
        <input type="text" name="nom">
    </div>

    <br>

    <div>
        <label>Responsable :</label>
        <input type="text" name="responsable">
    </div>

    <br>

    <div>
        <label>Téléphone :</label>
        <input type="text" name="telephone">
    </div>

    <br>

    <button type="submit">
        Ajouter
    </button>

</form>


<a href="{{ route('services.index') }}">
    Retour
</a>

@endsection
