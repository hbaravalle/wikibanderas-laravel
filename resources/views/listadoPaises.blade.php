@extends('layouts.mainLayout')
@section('content')
<section id="__seccion-listado-banderas">
    <div class="container">
        <div class="row">

            @forelse($listadoPaises as $pais)
                <div class="col-6 col-lg-4 col-xl-3 mb-5">
                    <div class="card __card-bandera">
                        <a href="/pais/{{ $pais->id }}">
                            <img src="/storage/banderas/{{ $pais->bandera }}">
                            <div class="card-body">
                                <h4 class="card-title">{{ $pais->nombre }}</h4>
                                <ul>
                                    <li><strong>Población:</strong> {{ $pais->poblacion }}</li>
                                    @if ($pais->genero)
                                        <li><strong>Region:</strong> {{ $pais->continente->nombre }}</li>
                                    @endif
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <h2>Aún no existen paises en la base de datos :(</h2>
            @endforelse
            
        </div>
    </div>
</section>
@endsection