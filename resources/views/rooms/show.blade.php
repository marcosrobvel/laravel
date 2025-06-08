<!DOCTYPE html>
<html>
<head>
    <title>Room Details</title>
</head>
<body>
    <h1>Room #{{ $room->roomNumber }}</h1>

    <ul>
        <li><strong>Room Type:</strong> {{ $room->roomType }}</li>
        <li><strong>Amenities:</strong> {{ $room->amenities }}</li>
        <li><strong>Price:</strong> ${{ number_format($room->price, 2) }}</li>
        <li><strong>Offer Price:</strong> 
            {{ $room->offer_price ? '$' . number_format($room->offer_price, 2) : 'No offer' }}
        </li>
        <li><strong>Status:</strong> {{ ucfirst($room->status) }}</li>
    </ul>

    <h3>Photos:</h3>
    @if (is_array($room->photo) && count($room->photo))
        @foreach ($room->photo as $img)
            <img src="{{ asset('storage/' . $img) }}" alt="Room Photo" width="200" style="margin:10px;">
        @endforeach
    @else
        <p>No photos available.</p>
    @endif

    <br><br>
    <a href="{{ route('rooms.index') }}">Return to room list</a>
</body>
</html>
