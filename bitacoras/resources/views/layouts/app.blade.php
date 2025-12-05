<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DENSO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/js/app.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
</head>

<body>

    <!-- NAV PARA CELULAR -->
    <nav class="navbar navbar-dark bg-danger d-md-none px-3">
        <button class="btn text-white" data-bs-toggle="offcanvas" data-bs-target="#menuMobile">
            <i class="bi bi-list fs-1"></i>
        </button>
        <span class="navbar-brand mb-0 h1">DENSO</span>
    </nav>

    <!-- MENÚ OFFCANVAS MOBILE -->
    <div class="offcanvas offcanvas-start bg-danger text-white" tabindex="-1" id="menuMobile">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menú</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body p-0">
            <ul class="nav flex-column">
                <li class="nav-item text-center py-3 border-bottom border-light">
                    <a class="nav-link text-white" href="/denso">
                        <h6><img src="{{ asset('/images/denso-vector-logo.svg') }}" class="img-fluid"><br>Denso</h6>
                    </a>
                </li>

                <!-- mismos links que tu sidebar -->
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('visitas.index') }}">
                        <h6><i class="bi bi-person-check me-3"></i>Administradores</h6>
                    </a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">
                        <h6><i class="bi bi-suitcase-lg me-3"></i>Empresas</h6>
                    </a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">
                        <h6><i class="bi bi-person me-3"></i>Usuarios</h6>
                    </a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">
                        <h6><i class="bi bi-check-circle me-3"></i>Accesos</h6>
                    </a></li>
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
    </div>

    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- SIDEBAR DESKTOP -->
            <div class="col-md-auto bg-danger sidebar vh-100 p-0 d-none d-md-block">
                <ul class="nav flex-column p-0 m-0">

                    <li class="nav-item text-center py-3 border-bottom border-light">
                        <a class="nav-link text-white" href="/denso">
                            <h6><img src="{{ asset('/images/denso-vector-logo.svg') }}" class="img-fluid"><br>Denso
                            </h6>
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('visitas.index') }}">
                            <h6><i class="bi bi-person-check me-3"></i>Administradores</h6>
                        </a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-suitcase-lg me-3"></i>Empresas</h6>
                        </a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">
                            <h6><i class="bi bi-person me-3"></i>Usuarios</h6>
                        </a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/bitacoras">
                            <h6><i class="bi bi-pencil-square me-3"></i>Bitacoras</h6>
                        </a></li>
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

            <!-- CONTENIDO -->
            <div class="col d-flex flex-column p-0">

                <main class="flex-fill overflow-auto p-4">
                    @yield('content')
                </main>

                <!-- FOOTER -->
                <footer class="bg-secondary text-center py-3">
                    <img src="{{ asset('/images/denso-vector-logo.svg') }}" class="img-fluid" style="height: 40px;">
                    <p class="text-white mb-0">© 2025 DENSO Corporation</p>
                </footer>

            </div>
        </div>
    </div>

</body>

</html>
