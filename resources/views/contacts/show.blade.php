@extends('layouts.app')

@section('content')
<h1>Contact Details</h1>

<ul>
    <li><strong>Photo:</strong><br><img src="{{ $contact->photo }}" alt="Photo" width="150"></li>
    <li><strong>Date:</strong> {{ $contact->date }}</li>
    <li><strong>Customer:</strong> {{ $contact->customer }}</li>
    <li><strong>Email:</strong> {{ $contact->mail }}</li>
    <li><strong>Phone:</strong> {{ $contact->phone }}</li>
    <li><strong>Subject:</strong> {{ $contact->subject }}</li>
    <li><strong>Comment:</strong> {{ $contact->comment }}</li>
    <li><strong>Status:</strong> {{ ucfirst($contact->status) }}</li>
</ul>

<a href="{{ route('contacts.index') }}">Back to contacts list</a>
@endsection
