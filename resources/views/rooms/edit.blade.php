@extends('layouts.app')

@section('content')
    <h1>Edit Room</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="photo">Photos (upload to replace):</label>
        <input type="file" name="photo[]" id="photo" multiple>
        <br><br>

        <p>Current Photos:</p>
        <ul>
            @foreach (json_decode($room->photo, true) ?? [] as $img)
                <li><img src="{{ asset('storage/' . $img) }}" alt="Room Photo" width="100"></li>
            @endforeach
        </ul>
        <br>

        <label for="roomNumber">Room Number:</label>
        <input type="number" name="roomNumber" id="roomNumber" value="{{ old('roomNumber', $room->roomNumber) }}" required>
        <br><br>

        <label for="roomType">Room Type:</label>
        <input type="text" name="roomType" id="roomType" value="{{ old('roomType', $room->roomType) }}" required>
        <br><br>

        <label for="amenities">Amenities (comma-separated):</label>
        <input type="text" name="amenities" id="amenities" value="{{ old('amenities', $room->amenities) }}" required>
        <br><br>

        <label for="price">Price:</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $room->price) }}" required>
        <br><br>

        <label for="offer_price">Offer Price:</label>
        <input type="number" step="0.01" name="offer_price" id="offer_price" value="{{ old('offer_price', $room->offer_price) }}">
        <br><br>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="available" {{ $room->status === 'available' ? 'selected' : '' }}>Available</option>
            <option value="booked" {{ $room->status === 'booked' ? 'selected' : '' }}>Booked</option>
        </select>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('rooms.index') }}">Back to room list</a>
@endsection
