<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DENSO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-auto bg-danger sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white text-center" href="/denso">
                            <h6><img src="{{ asset('/images/denso-vector-logo.svg') }}" class="img-fluid"><br>Denso
                                <hr class="border border-light border-1 opacity-100">
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/administradores">
                            <h6><i class="bi bi-person-check me-3"></i>Administradores</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-suitcase-lg me-3"></i>Empresas</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-person me-3"></i>Usuarios</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-check-circle me-3"></i>Accesos</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-check-circle me-3"></i>Proveedores</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/bitacoras">
                            <h6><i class="bi bi-pencil-square me-3"></i>Bitacoras</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-person-walking me-3"></i>Rondines</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-file-earmark me-3"></i>Documentos</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-bell me-3"></i>Avisos</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-folder me-3"></i>Reportes</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-person me-3"></i>Directorio</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-exclamation-triangle me-3"></i>Emergencias</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-gear me-3"></i>Mantenimiento</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-envelope-arrow-up me-3"></i>Solicitudes de Servicio</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-train-front me-3"></i>Procesos de embarque</h6>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid col bg-light text-center">
                @yield('content')
            </div>
            <div class="container-fluid bg-dark">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top justify-content-center">
                    <img src="{{ asset('/images/denso-vector-logo.svg') }}" class="img-fluid">
                    <p class="text-white">© 2025 DENSO, Corporation</p>
                </footer>
            </div>
        </div>
    </div>

</body>

</html>
