@extends('layouts.app')

@section('content')
    <h1>Available Rooms</h1>
    <div class="room-list">
        @foreach ($rooms as $room)
            <div class="room">
                <h2>Room {{ $room->roomNumber }} ({{ $room->roomType }})</h2>
                <p>Amenities: {{ $room->amenities }}</p>
                <p>Price: ${{ $room->offer_price ?? $room->price }}</p>
                @foreach ($room->photo as $photo)
                    <img src="{{ asset('storage/' . $photo) }}" alt="Room photo" width="150">
                @endforeach
            </div>
        @endforeach
    </div>
@endsection