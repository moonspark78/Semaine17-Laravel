<h1>Service Direction</h1>


@if($service)

    <p>
        {{ $service->nom }}
    </p>

    <p>
        Responsable : {{ $service->responsable }}
    </p>

    <p>
        Telephone : {{ $service->telephone }}
    </p>

@else

    <p>Service introuvable</p>

@endif