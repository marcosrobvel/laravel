@extends('layouts.app') {{-- Asegúrate de tener un layout base --}}

@section('content')
    <h1>Actividades</h1>

    <a href="{{ route('activities.create') }}">Crear nueva actividad</a>

    @foreach ($activities as $activity)
        <div>
            <h3>{{ $activity->title }}</h3>
            <p>{{ $activity->description }}</p>
            <p>Creada por: {{ $activity->user->name ?? 'Sin usuario' }}</p>

            <a href="{{ route('activities.show', $activity) }}">Ver</a>
            <a href="{{ route('activities.edit', $activity) }}">Editar</a>

            <form action="{{ route('activities.destroy', $activity) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
@endsection
