@extends('layouts.mainLayout')
@section('content')
<div class="container">
    @foreach($continentes as $continente)
    <h2>{{ $continente->nombre }}</h2>
    <ul>
        @foreach($continente->paises as $pais)
        <li>{{ $pais->nombre }}</li>
        @endforeach
    </ul>
    @endforeach
</div>

@endsection