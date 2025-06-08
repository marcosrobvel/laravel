@extends('layouts.app')

@section('content')
<h1>Edit Contact</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="photo">Photo URL:</label>
    <input type="url" name="photo" id="photo" value="{{ old('photo', $contact->photo) }}" required>
    <br><br>

    <label for="date">Date:</label>
    <input type="date" name="date" id="date" value="{{ old('date', $contact->date) }}" required>
    <br><br>

    <label for="customer">Customer:</label>
    <input type="text" name="customer" id="customer" value="{{ old('customer', $contact->customer) }}" required>
    <br><br>

    <label for="mail">Email:</label>
    <input type="email" name="mail" id="mail" value="{{ old('mail', $contact->mail) }}" required>
    <br><br>

    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" value="{{ old('phone', $contact->phone) }}" required>
    <br><br>

    <label for="subject">Subject:</label>
    <select name="subject" id="subject" required>
        <option value="New Subject" {{ old('subject', $contact->subject) == 'New Subject' ? 'selected' : '' }}>New Subject</option>
        <option value="Other" {{ old('subject', $contact->subject) != 'New Subject' ? 'selected' : '' }}>Other</option>
    </select>
    <input type="text" name="subject_custom" placeholder="If other, type here" value="{{ old('subject', $contact->subject) != 'New Subject' ? old('subject', $contact->subject) : '' }}">
    <br><br>

    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" required>{{ old('comment', $contact->comment) }}</textarea>
    <br><br>

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="pending" {{ old('status', $contact->status) == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="resolved" {{ old('status', $contact->status) == 'resolved' ? 'selected' : '' }}>Resolved</option>
        <option value="closed" {{ old('status', $contact->status) == 'closed' ? 'selected' : '' }}>Closed</option>
    </select>
    <br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('contacts.index') }}">Back to contacts list</a>
@endsection
