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
                <form class="text-center" method="post" action="/pais/borrar/{{ $unPais->id }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h5>¿Estás seguro de borrar este pais?</h5>
                    <input type="hidden" name="id" value="{{ $unPais->id }}">        
                    <button class="btn btn-danger btn-lg btn-block" type="submit">Eliminar pais</button>
                </form>
            </div>          
            
        </div>
    </div>
</section>
@endsection