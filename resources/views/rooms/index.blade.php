@extends('layouts.app')

@section('content')
    <h1>Available Rooms</h1>
    <a href="{{ route('rooms.create') }}">Create New Room</a>
    <div class="room-list">
        @foreach ($rooms as $room)
            <div class="room">
                <h2>Room {{ $room->roomNumber }} ({{ $room->roomType }})</h2>
                <p>Amenities: {{ $room->amenities }}</p>
                <p>Price: ${{ $room->offer_price ?? $room->price }}</p>
                @foreach (json_decode($room->photo, true) as $photo)
                    <img src="{{ asset('storage/' . $photo) }}" alt="Room photo" width="150">
                @endforeach
            </div>
            <div class="actions">
                    <a href="{{ route('rooms.edit', $room->id) }}" style="margin-right: 10px;">Edit</a>
                    <a href="{{ route('rooms.show', $room->id) }}" style="margin-right: 10px;">Details</a>

                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this room?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Delete</button>
                    </form>
                </div>
        @endforeach
    </div>
@endsection