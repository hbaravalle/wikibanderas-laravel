@extends('layouts.mainLayout')
@section('content')
<section id="__seccion-listado-banderas">
    <div class="container">
        <div class="row">
            
            <div class="col-6 offset-3">
                <img src="/storage/banderas/{{ $unPais->bandera }}" alt="{{ $unPais->nombre }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $unPais->nombre }}</h4>
                    <ul>
                        <li><strong>Población:</strong> {{ $unPais->poblacion }}</li>
                        <li><strong>Region:</strong> {{ $unPais->continente->nombre }}</li>
                    </ul>
                </div>
                <a href="/pais/borrar/{{ $unPais->id }}" class="text-danger"><small>Eliminar país</small></a>
            </div>          
            
        </div>
    </div>
</section>
@endsection