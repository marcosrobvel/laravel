@extends('layouts.app')

@section('content')
    <h1>Contactos</h1>

    @if(session('success'))
        <div style="background: #d4edda; padding: 10px; margin-bottom: 1rem; color: #155724;">
            {{ session('success') }}
        </div>
    @endif

    <div class="contacts-list">
        @foreach ($contacts as $contact)
            <div class="contact-card" style="border:1px solid #ccc; padding: 10px; margin-bottom: 1rem;">
                <h3>{{ $contact->customer }} ({{ $contact->mail }})</h3>
                <p><strong>Fecha:</strong> {{ $contact->date->format('d/m/Y') }}</p>
                <p><strong>Teléfono:</strong> {{ $contact->phone }}</p>
                <p><strong>Asunto:</strong> {{ $contact->subject }}</p>
                <p><strong>Comentario:</strong> {{ $contact->comment }}</p>
                <p><strong>Estado:</strong> {{ $contact->status ?: 'Activo' }}</p>
                @if ($contact->photo)
                    <img src="{{ asset('storage/' . $contact->photo) }}" alt="Foto de contacto" width="150" style="margin-top: 10px;">
                @endif
            </div>
        @endforeach
    </div>
@endsection
