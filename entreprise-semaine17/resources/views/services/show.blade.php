<h1>Ici c'est le show !</h1>


<h2>
Vous consultez le service numéro : {{ $id }}
</h2>


@if($service)

    <h2>
        {{ $service->nom }}
    </h2>

    <h3>
        Responsable : {{ $service->responsable }}
    </h3>

    <h3>
        Telephone : {{ $service->telephone }}
    </h3>


@else

    <p>
        Service introuvable
    </p>

@endif


<a href="{{ route('services.index') }}">
    Retour à la liste des services
</a>