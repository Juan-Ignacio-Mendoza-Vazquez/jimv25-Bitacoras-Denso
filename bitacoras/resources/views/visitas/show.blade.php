@extends('layouts.app')

@section('content')
    <h1 class="display-1">Detalles de la visita</h1>
    <br>

    <div class="container">

        <ul class="list-group">
            <li class="list-group-item"><strong>Nombre:</strong> {{ $visita->name }}</li>
            <li class="list-group-item"><strong>Compañía:</strong> {{ $visita->company }}</li>
            <li class="list-group-item"><strong>Motivo:</strong> {{ $visita->reason }}</li>
            <li class="list-group-item"><strong>Hora:</strong> {{ $visita->hour }}</li>
            <li class="list-group-item">
                <strong>Foto:</strong><br>
                <img src="{{ asset('storage/' . $visita->photo) }}" width="200">
            </li>
        </ul>

        <a href="{{ route('visitas.index') }}" class="btn btn-secondary mt-3">Volver</a>

    </div>
@endsection
