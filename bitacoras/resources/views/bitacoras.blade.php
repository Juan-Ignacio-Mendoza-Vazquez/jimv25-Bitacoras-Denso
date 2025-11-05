@extends('layouts.app')

@section('content')
    <h1 class="display-1">Accesos de Bitácoras</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">BITÁCORA</th>
                <th scope="col">NOMBRE DEL VISITANTE</th>
                <th scope="col">COMPAÑIA/COMPANY</th>
                <th scope="col">CONTACTO EN DENSO/CONTACT DENSO</th>
                <th scope="col">GRUPO FÍSICO</th>
                <th scope="col">ENTRADA</th>
                <th scope="col">SALIDA</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Visitantes</td>
                <td scope="row">Andrea Rosas</td>
                <td scope="row">Denso Apodaca</td>
                <td scope="row">Jaqueline Garcia</td>
                <td scope="row text-bg-primary">Plata Silao</td>
                <td scope="row">--</td>
                <td scope="row">--</td>
                <td scope="row">detalles</td>
            </tr>
            <tr>
                <td scope="row">Visitantes</td>
                <td scope="row">Daisy Mairan Solorsano Alvarez</td>
                <td scope="row">Examen medico</td>
                <td scope="row">Diego Navarro</td>
                <td scope="row text-bg-primary">Plata Apodaca</td>
                <td scope="row">Sep 22, 2025 - 10:36 AM</td>
                <td scope="row">--</td>
                <td scope="row">detalles</td>
            </tr>
        </tbody>
    </table>
@endsection
