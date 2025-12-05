@extends('layouts.app')
@section('title', 'Lista de Tareas')


@section('content')
<div class="container py-5 bg-light">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary">Lista de Tareas</h1>

        <!-- Button for create task -->
        <a href="{{ route('tasks.create') }}" class="btn btn-success">
            + Nueva Tarea
        </a>
    </div>

    <table class="table table-striped table-hover shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Estado</th>
                <th>Fecha Límite</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td class="fw-semibold">{{ $task->title }}</td>

                    <!-- State with labels -->
                    <td>
                        @if ($task->is_done)
                            <span class="badge bg-success">Completada</span>
                        @else
                            <span class="badge bg-warning text-dark">Pendiente</span>
                        @endif
                    </td>

                    <!-- Date limit -->
                    <td>
                        {{ $task->due_date ? $task->due_date->format('Y-m-d') : '—' }}
                    </td>

                    <!-- Actions -->
                    <td class="text-center">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">
                            Editar
                        </a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Eliminar tarea?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">
                        No hay tareas registradas todavía.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection


