<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<body>

<a href="{{route('bienvenue')}}">Accueil</a> |
<a href="{{route('liste')}}">Employés</a> |
<a href="{{route('index')}}">Services</a> |
<a href="/contact">Contact</a>

<h1>Liste des services</h1>

@foreach($services as $service)

<p>Nom : {{$service["nom"]}}</p>

<p>Responsable : {{$service["responsable"]}}</p>

<p>Téléphone : {{$service["telephone"]}}</p>

<a href="{{route('show', $service["id"])}}">
Voir le service
</a>

<hr>

@endforeach

</body>
</html>