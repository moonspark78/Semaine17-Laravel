<h1>Requêtes Employés</h1>


<hr>

<h2>Exercice 1 : Afficher tous les employés</h2>

@foreach($employes as $employe)

<p>
    {{ $employe->nom }} - {{ $employe->prenom }}
</p>

@endforeach


<hr>


<h2>Exercice 2 : Afficher uniquement les prénoms</h2>

@foreach($employes as $employe)

<p>
    {{ $employe->prenom }}
</p>

@endforeach


<hr>


<h2>Exercice 3 : Employés du service comptabilite</h2>

@foreach($employes as $employe)

@if($employe->service == "comptabilite")

<p>
    {{ $employe->nom }} - {{ $employe->prenom }}
</p>

@endif

@endforeach


<hr>


<h2>Exercice 4 : Salaire supérieur à 2500 €</h2>

@foreach($employes as $employe)

@if($employe->salaire > 2500)

<p>
    {{ $employe->nom }} - {{ $employe->salaire }} €
</p>

@endif

@endforeach


<hr>


<h2>Exercice 5 : Employés recrutés après le 1er janvier 2020</h2>

@foreach($employes as $employe)

@if($employe->date_embauche > "2020-01-01")

<p>
    {{ $employe->nom }} - {{ $employe->date_embauche }}
</p>

@endif

@endforeach


<hr>


<h2>Exercice 6 : Employés classés par nom</h2>

@php
$employesNom = $employes->sortBy('nom');
@endphp

@foreach($employesNom as $employe)

<p>
    {{ $employe->nom }} - {{ $employe->prenom }}
</p>

@endforeach


<hr>


<h2>Exercice 7 : Salaire du plus élevé au plus faible</h2>

@php
$employesSalaire = $employes->sortByDesc('salaire');
@endphp

@foreach($employesSalaire as $employe)

<p>
    {{ $employe->nom }} - {{ $employe->salaire }} €
</p>

@endforeach


<hr>


<h2>Exercice 8 : Les 5 premiers employés</h2>

@foreach($employes->take(5) as $employe)

<p>
    {{ $employe->nom }} - {{ $employe->prenom }}
</p>

@endforeach


<hr>


<h2>Exercice 9 : Prénom commence par A</h2>

@foreach($employes as $employe)

@if(str_starts_with($employe->prenom, "A"))

<p>
    {{ $employe->prenom }}
</p>

@endif

@endforeach


<hr>


<h2>Exercice 10 : Nombre total d'employés</h2>

<p>
    Nombre d'employés : {{ $employes->count() }}
</p>


<hr>


<h2>Exercice 11 : Salaire moyen</h2>

<p>
    Salaire moyen :
    {{ $employes->avg('salaire') }} €
</p>


<hr>


<h2>Exercice 12 : Salaire moyen par service</h2>

@php
$moyenneService = $employes->groupBy('service');
@endphp

@foreach($moyenneService as $service => $liste)

<p>
    {{ $service }} :
    {{ $liste->avg('salaire') }} €
</p>

@endforeach


<hr>


<h2>Exercice 13 : Nombre d'employés par service</h2>

@foreach($moyenneService as $service => $liste)

<p>
    {{ $service }} :
    {{ $liste->count() }}
</p>

@endforeach


<hr>


<h2>Exercice 14 : Nombre d'hommes et de femmes</h2>

<p>
    Hommes :
    {{ $employes->where('sexe','m')->count() }}
</p>

<p>
    Femmes :
    {{ $employes->where('sexe','f')->count() }}
</p>


<hr>


<h2>Exercice 15 : Services différents</h2>

@foreach($employes->pluck('service')->unique() as $service)

<p>
    {{ $service }}
</p>

@endforeach


<hr>


<h2>Exercice 16 : Dernier employé embauché</h2>

@php
$dernier = $employes->sortByDesc('date_embauche')->first();
@endphp

<p>
    {{ $dernier->nom }} - {{ $dernier->date_embauche }}
</p>


<hr>


<h2>Exercice 17 : Plus gros salaire</h2>

@php
$plusGros = $employes->sortByDesc('salaire')->first();
@endphp

<p>
    {{ $plusGros->nom }} - {{ $plusGros->salaire }} €
</p>


<hr>


<h2>Exercice 18 : Employé le moins payé</h2>

@php
$moinsPaye = $employes->sortBy('salaire')->first();
@endphp

<p>
    {{ $moinsPaye->nom }} - {{ $moinsPaye->salaire }} €
</p>


<hr>


<h2>Exercice 19 : Commercial avec salaire supérieur à 2200 €</h2>

@foreach($employes as $employe)

@if($employe->service == "commercial" && $employe->salaire > 2200)

<p>
    {{ $employe->nom }} - {{ $employe->salaire }} €
</p>

@endif

@endforeach


<hr>


<h2>Exercice 20 : Employés recrutés entre 2020 et 2024</h2>

@foreach($employes as $employe)

@if($employe->date_embauche >= "2020-01-01" && $employe->date_embauche <= "2024-12-31")

<p>
    {{ $employe->nom }} - {{ $employe->date_embauche }}
</p>

@endif

@endforeach


<hr>


<h2>Exercice 21 : Augmenter les salaires de 100 €</h2>

@foreach($employes as $employe)

<p>
    {{ $employe->nom }}
    -
    Nouveau salaire :
    {{ $employe->salaire + 100 }} €
</p>

@endforeach


<hr>


<h2>Exercice 22 : Supprimer les employés Marketing</h2>

<p>
    (Suppression non faite ici pour éviter de supprimer les données)
</p>