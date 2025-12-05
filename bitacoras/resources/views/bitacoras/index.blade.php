@extends('layouts.app')

@section('content')
    <h1 class="display-1 ">Bitácoras</h1>
    <br>
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- TABLA -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-danger text-center">
                    <tr>
                        <th>Bitácora</th>
                        <th>Visitante</th>
                        <th>Compañía</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Detalles</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($bitacoras as $bitacora)
                        <tr>
                            <td>{{ $bitacora->bitacora }}</td>

                            <td>{{ $bitacora->nombre_visitante }}</td>

                            <td>{{ $bitacora->compania }}</td>

                            <td class="text-center">{{ $bitacora->entrada }}</td>

                            <td class="text-center">
                                {{ $bitacora->salida}}
                            </td>

                            <td class="text-center">
                               {{$bitacora->detalle}}
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                No hay registros en bitácoras.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- PAGINACIÓN -->
        <div class="d-flex justify-content-center mt-3">
            {{ $bitacoras->links() }}
        </div>

        <!-- BOTÓN CREAR -->
        <div class="text-end mb-3">
            <a href="{{ route('bitacoras.create') }}" class="btn btn-outline-success" dusk="btn-registrar">Registrar Bitácora</a>
        </div>

    </div>
@endsection
