<h1>Liste des responsables</h1>


@foreach($services as $service)

    <p>
        {{ $service->nom }} - {{ $service->responsable }}
    </p>

@endforeach