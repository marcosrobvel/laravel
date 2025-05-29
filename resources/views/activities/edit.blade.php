@extends('layouts.app')

@section('content')
    <h1>Editar actividad</h1>

    <form action="{{ route('activities.update', $activity) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Título:</label>
        <input type="text" name="title" value="{{ old('title', $activity->title) }}">
        @error('title') <p>{{ $message }}</p> @enderror

        <label>Descripción:</label>
        <textarea name="description">{{ old('description', $activity->description) }}</textarea>
        @error('description') <p>{{ $message }}</p> @enderror

        <button type="submit">Actualizar</button>
    </form>
@endsection
