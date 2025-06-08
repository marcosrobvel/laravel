@extends('layouts.app')

@section('content')
    <h1>Edit Activity</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
            <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
            <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
            <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
            <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
        </select>
        <br><br>

        <label for="datetime">Date:</label>
        <input
            type="datetime-local"
            name="datetime"
            id="datetime"
            value="{{ $activity->datetime->format('Y-m-d\TH:i') }}"
            required
        >
        <br><br>

        <label for="paid">Paid:</label>
        <input
            type="checkbox"
            name="paid"
            id="paid"
            value="1"
            {{ $activity->paid ? 'checked' : '' }}
        >
        <br><br>

        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes" required>{{ $activity->notes }}</textarea>
        <br><br>

        <label for="satisfaction">Satisfaction (0-10):</label>
        <input
            type="number"
            name="satisfaction"
            id="satisfaction"
            min="0"
            max="10"
            value="{{ $activity->satisfaction ?? '' }}"
        >
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('activities.index') }}">Back to activities list</a>
@endsection



<!--
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
-->