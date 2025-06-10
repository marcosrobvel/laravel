@extends('layouts.app')

@section('content')
<h1>Create Contact</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="photo">Photo URL:</label>
    <input type="url" name="photo" id="photo" value="{{ old('photo') }}" required>
    <br><br>

    <label for="date">Date:</label>
    <input type="date" name="date" id="date" value="{{ old('date') }}" required>
    <br><br>

    <label for="customer">Customer:</label>
    <input type="text" name="customer" id="customer" value="{{ old('customer') }}" required>
    <br><br>

    <label for="mail">Email:</label>
    <input type="email" name="mail" id="mail" value="{{ old('mail') }}" required>
    <br><br>

    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required>
    <br><br>

    <label for="subject">Subject:</label>
    <select name="subject" id="subject" required>
        <option value="New Subject" {{ old('subject') == 'New Subject' ? 'selected' : '' }}>New Subject</option>
        <option value="Other" {{ old('subject') && old('subject') != 'New Subject' ? 'selected' : '' }}>Other</option>
    </select>
    <input type="text" name="subject_custom" placeholder="If other, type here" value="{{ old('subject') != 'New Subject' ? old('subject') : '' }}">
    <br><br>

    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" required>{{ old('comment') }}</textarea>
    <br><br>

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="pending" {{ old('status') == '' ? 'selected' : '' }}>Pending</option>
        <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
    </select>
    <br><br>

    <button type="submit">Save</button>
</form>

<a href="{{ route('contacts.index') }}">Back to contacts list</a>
<a href="{{ route('contacts.index') }}">Back to contacts list</a>
@endsection
