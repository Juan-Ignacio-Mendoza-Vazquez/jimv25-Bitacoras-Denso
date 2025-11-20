@extends('layouts.app')

@section('content')
    <h1 class="display-1">Visitas</h1>
    <br>

    <div class="container text-end">
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Compañía</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($visitas as $visita)
                    <tr>
                        <td>{{ $visita->name }}</td>
                        <td>{{ $visita->company }}</td>
                        <td>{{ $visita->hour }}</td>
                        <td>
                            <a href="{{ route('visitas.show', $visita->id) }}" class="bi bi-eye text-info me-3"></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay visitas registradas.</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
        {{-- Paginación con Bootstrap --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $visitas->links('pagination::bootstrap-5') }}
        </div>
        <a href="/registro-visita" class="btn btn-outline-success">Registar</a>
    </div>
@endsection
