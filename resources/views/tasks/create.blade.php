<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tarea</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="fw-bold text-primary mb-4">Nueva Tarea</h1>

    <!-- set -->
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <!-- form -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('tasks.store') }}" method="POST">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf

                <!-- tittle -->
                <div class="mb-3">
                    <label class="form-label">Título*</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <!-- description -->
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>

                <!-- date limit -->
                <div class="mb-3">
                    <label class="form-label">Fecha límite</label>
                    <input type="date" name="due_date" class="form-control">
                </div>

                <!-- Checkbox of complete -->
                <div class="form-check mb-3">
                    <input type="checkbox" name="is_done" class="form-check-input" id="is_done">
                    <label class="form-check-label" for="is_done">
                        Marcar como completada
                    </label>
                </div>

                <!-- button -->
                <button type="submit" class="btn btn-success">
                    Guardar Tarea
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
