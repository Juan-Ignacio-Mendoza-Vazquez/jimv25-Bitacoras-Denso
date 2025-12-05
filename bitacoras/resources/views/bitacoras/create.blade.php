@extends('layouts.app')

@section('content')
    <h1 class="display-1">Registro Bitácora</h1>
    <br>

    <div class="container text-start">

        @if (session('success'))
            <div id="confirm" class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="{{ route('bitacoras.store') }}" 
              method="POST" 
              novalidate 
              class="row g-3" 
              id="registrar-bitacora">

            @csrf

            <!-- BITACORA -->
            <div class="col-md-4">
                <label class="form-label" for="bitacora">Bitácora:</label>
                <input placeholder="Ingrese número o clave de bitácora" 
                       type="text"
                       class="form-control @error('bitacora') is-invalid @enderror"
                       value="{{ old('bitacora') }}"
                       name="bitacora"
                       id="bitacora"
                       required>
                @error('bitacora')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- NOMBRE VISITANTE -->
            <div class="col-md-4">
                <label class="form-label" for="nombre_visitante">Nombre del visitante:</label>
                <input placeholder="Ingrese nombre completo"
                       type="text"
                       class="form-control @error('nombre_visitante') is-invalid @enderror"
                       value="{{ old('nombre_visitante') }}"
                       name="nombre_visitante"
                       id="nombre_visitante"
                       required>
                @error('nombre_visitante')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- COMPAÑIA -->
            <div class="col-md-4">
                <label class="form-label" for="compania">Compañía:</label>
                <input placeholder="Ingrese el nombre de la empresa"
                       type="text"
                       class="form-control @error('compania') is-invalid @enderror"
                       value="{{ old('compania') }}"
                       name="compania"
                       id="compania"
                       required>
                @error('compania')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- CONTACTO DENSO -->
            <div class="col-md-6">
                <label class="form-label" for="contacto_denso">Contacto en Denso:</label>
                <input placeholder="Persona a la que visita"
                       type="text"
                       class="form-control @error('contacto_denso') is-invalid @enderror"
                       value="{{ old('contacto_denso') }}"
                       name="contacto_denso"
                       id="contacto_denso"
                       required>
                @error('contacto_denso')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- GRUPO FISICO -->
            <div class="col-md-6">
                <label class="form-label" for="grupo_fisico">Grupo físico:</label>
                <input placeholder="Ingrese grupo físico"
                       type="text"
                       class="form-control @error('grupo_fisico') is-invalid @enderror"
                       value="{{ old('grupo_fisico') }}"
                       name="grupo_fisico"
                       id="grupo_fisico"
                       required>
                @error('grupo_fisico')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- ENTRADA -->
            <div class="col-md-6">
                <label class="form-label" for="entrada">Entrada:</label>
                <input type="datetime-local"
                       class="form-control @error('entrada') is-invalid @enderror"
                       value="{{ old('entrada') }}"
                       name="entrada"
                       id="entrada"
                       required>
                @error('entrada')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- SALIDA -->
            <div class="col-md-6">
                <label class="form-label" for="salida">Salida:</label>
                <input type="datetime-local"
                       class="form-control @error('salida') is-invalid @enderror"
                       value="{{ old('salida') }}"
                       name="salida"
                       id="salida">
                @error('salida')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- DETALLE -->
            <div class="col-12">
                <label class="form-label" for="detalle">Detalle:</label>
                <textarea placeholder="Ingrese información adicional"
                          class="form-control @error('detalle') is-invalid @enderror"
                          name="detalle"
                          id="detalle"
                          required>{{ old('detalle') }}</textarea>
                @error('detalle')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- BOTONES -->
            
            <div class="col-md-6 text-end">
                <button type="submit" class="btn btn-outline-success" >Registrar</button>
            </div>

        </form>
    </div>
@endsection
