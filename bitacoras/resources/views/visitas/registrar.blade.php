@extends('layouts.app')

@section('content')
    <h1 class="display-1">Registrar Visitas</h1>
    <br>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <div class="container text-start">
        <form action="{{ route('visitas.store') }}" method="POST" enctype="multipart/form-data" novalidate class="row g-3" id="registar-visita">
            @csrf
            <div class="col-md-6">
                <label class="form-label" for="name">Nombre:</label>
                <input placeholder="Ingrese su nombre completo" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name"
                    id="name" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="company">Empresa:</label>
                <input placeholder="Ingrese de que empresa viene" type="text" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}" name="company"
                    id="company" required>
                @error('company')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label class="form-label" for="reason">Motivo:</label>
                <textarea placeholder="Ingrese la razon de visita" class="form-control @error('reason') is-invalid @enderror" name="reason" id="reason" required>{{ old('reason') }}</textarea>
                @error('reason')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="hour">Hora:</label>
                <input type="time" class="form-control @error('hour') is-invalid @enderror" value="{{ old('hour') }}" name="hour" id="hour" required>
                 @error('hour')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="photo">Fotografia:</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" required>
                 @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <button type="submit" class="btn btn-outline-danger">Registrar</button>
            </div>
        </form>
    </div>
@endsection
