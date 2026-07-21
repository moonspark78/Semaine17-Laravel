<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Blade</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

{{ $titre }}
 {!! $titre !!}

 <h2> {{ $entreprise . ' ' . $employe }} </h2>
 {{-- Commentaire blade non visible dans le code source sur le navigateur, c'est comme un commentaire php --}}
 <!-- Commentaire HTML visible dans le code source -->

 {{-- Les directives blades --}}
 @if ($admin)
     <p>Admin ok!</p>
 @endif

 @if ($admin)
     <p>Admin ok!</p>
 @else
     <p>Membre normal!</p>
 @endif


@if($age >= 18)
<p>Vous êtes majeur</p>
@elseif ($age >= 16)
<p>Bientot majeur</p>
@else 
<p>Encore trop petit !</p>
@endif

@unless($admin)
<p>Pas admin</p>
@endunless

@foreach($employes as $employe)
<p> {{$employe['prenom']}} </p>
@endforeach

{{-- forelse, comme un foreach mais gère la condition si le array est empty --}}
@forelse ($employes as $employe)
<p> {{$employe['prenom']}} </p>
@empty
<p>Aucun employé</p>
@endforelse

@for($i = 0; $i < 5; $i++)
<p>Le compteur est à : {{$i}} </p>
@endfor 

@while($tentatives > 0)
    <p>Il vous reste {{$tentatives}} tentatives</p>
    <?php $tentatives--; ?>
@endwhile

{{-- Helpers --}}
{{route("employes.index")}}
{{date("d/m/Y")}}
{{strtoupper($titre)}}

@php
echo "<p>Coucou je suis dans du php ouvert par blade</p>";
@endphp
<hr>
<hr>


<h2>Exercice 1 : </h2>


<h1>{{ $entreprise }}</h1>

<hr>


<h2>Exercice 2 : </h2>

<p>Nombre d'employés : {{ count($employes) }}</p>

<hr>


<h2>Exercice 3 : </h2>

@foreach($employes as $employe)
    <p>{{ $employe["prenom"] }}</p>
@endforeach

<hr>


<h2>Exercice 4 : Nom - Prénom</h2>

@foreach($employes as $employe)
    <p>{{ $employe["nom"] }} - {{ $employe["prenom"] }}</p>
@endforeach

<hr>

<h2>Exercice 5 : Employés Informatique</h2>

@foreach($employes as $employe)

    @if($employe["service"] == "informatique")
        <p>{{ $employe["nom"] }} - {{ $employe["prenom"] }}</p>
    @endif

@endforeach

<hr>


<h2>Exercice 6 : Salaire supérieur à 2500 €</h2>

@foreach($employes as $employe)

    @if($employe["salaire"] > 2500)
        <p style="color: green">
            {{ $employe["nom"] }} - {{ $employe["salaire"] }} €
        </p>
    @endif

@endforeach


<hr>

<h2>Exercice 7 : Hommes et Femmes</h2>

@foreach($employes as $employe)

    @if($employe["sexe"] == "m")
        <p style="color: blue">
            {{ $employe["prenom"] }}
        </p>
    @else
        <p style="color: pink">
            {{ $employe["prenom"] }}
        </p>
    @endif

@endforeach


<hr>

<h2>Exercice 8 : Badge Bootstrap</h2>

@foreach($employes as $employe)

    @if($employe["service"] == "informatique")
        <span class="badge badge-primary">
            Informatique
        </span>

    @elseif($employe["service"] == "direction")
        <span class="badge badge-success">
            Direction
        </span>

    @else
        <span class="badge badge-secondary">
            {{ $employe["service"] }}
        </span>

    @endif

    <br>

@endforeach

<hr>

<h2>Exercice 9 : Tableau vide</h2>

@forelse($employes as $employe)

    <p>{{ $employe["prenom"] }}</p>

@empty

    <p>Aucun employé</p>

@endforelse

<hr>

<h2>Exercice 10 : Tableau Bootstrap</h2>

<table class="table table-bordered">

    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Service</th>
        <th>Salaire</th>
    </tr>


@foreach($employes as $employe)

    <tr>
        <td>{{ $employe["nom"] }}</td>
        <td>{{ $employe["prenom"] }}</td>
        <td>{{ $employe["service"] }}</td>
        <td>{{ $employe["salaire"] }} €</td>
    </tr>

@endforeach

</table>

</body>
</html>