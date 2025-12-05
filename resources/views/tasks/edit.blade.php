@extends('layouts.app')

@section('title', 'Editar Tareas')

@section('content')
<div class="container py-5 bg-light">

    <h1 class="fw-bold text-primary mb-4">Editar Tarea</h1>

    <!-- set-->
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <!-- form -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
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
                @method('PUT') <!-- Necessary for update -->

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Título*</label>
                    <input type="text" name="title" class="form-control"
                           value="{{ $task->title }}" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
                </div>

                <!-- limit date -->
                <div class="mb-3">
                    <label class="form-label">Fecha límite</label>
                    <input type="date" name="due_date" class="form-control"
                           value="{{ $task->due_date ? $task->due_date->format('Y-m-d') : '' }}">
                </div>

                <!-- Checkbox of complete -->
                <div class="form-check mb-3">
                    <input type="checkbox" name="is_done" class="form-check-input" id="is_done"
                           {{ $task->is_done ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_done">
                        Marcar como completada
                    </label>
                </div>

                <!-- button -->
                <button type="submit" class="btn btn-primary">
                    Actualizar Tarea
                </button>

            </form>
        </div>
    </div>
</div>    
@endsection


