@extends('layouts.app')

@section('content')
    <h1>{{ $activity->title }}</h1>
    <p>{{ $activity->description }}</p>
    <p>Creado por: {{ $activity->user->name ?? 'Desconocido' }}</p>

    <a href="{{ route('activities.index') }}">Volver</a>
@endsection
