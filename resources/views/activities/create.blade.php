@extends('layouts.app')

@section('content')
    <h1>Crear nueva actividad</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <p>{{ $message }}</p> @enderror

        <label>Descripción:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description') <p>{{ $message }}</p> @enderror

        <button type="submit">Guardar</button>
    </form>
@endsection
