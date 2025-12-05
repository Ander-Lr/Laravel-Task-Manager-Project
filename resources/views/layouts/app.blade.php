<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Tasks')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-light">

    <!-- Header -->
    <header>
        <div class="container text-center">
            <h2 class="fw-bold">2PPrac2. Laravel Tasks</h2>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <small class="d-block">
                <strong>Alumno:</strong> Lara Chicaiza Anderson Lenin<br>
                <strong>Curso:</strong> 6to ITIN<br>
                <strong>Código:</strong> 30768 - Desarrollo Web para Integración de Componentes
            </small>
        </div>
    </footer>

    <!-- Bootstrap JS (opcional para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
