<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
</head>
<body>
    <h1>Booking Details</h1>

    <ul>
        <li><strong>Guest:</strong> {{ $booking->guest }}</li>
        <li><strong>Order Date:</strong> {{ $booking->orderDate }}</li>
        <li><strong>Check-In:</strong> {{ $booking->checkIn }}</li>
        <li><strong>Check-Out:</strong> {{ $booking->checkOut }}</li>
        <li><strong>Special Request:</strong> {{ $booking->special ?? 'None' }}</li>
        <li><strong>Room Type:</strong> {{ ucfirst($booking->roomType) }}</li>
        <li><strong>Room Number:</strong> {{ $booking->roomNumber }}</li>
        <li><strong>Status:</strong> {{ ucfirst(str_replace('_', ' ', $booking->bookStatus)) }}</li>
        <li><strong>Photos:</strong>
            @if ($booking->photo && is_array($booking->photo))
                <div style="margin-top: 10px;">
                    @foreach ($booking->photo as $img)
                        <img src="{{ asset('storage/' . $img) }}" alt="Photo" width="100" style="margin:5px;">
                    @endforeach
                </div>
            @else
                No photos uploaded.
            @endif
        </li>
    </ul>

    <a href="{{ route('bookings.index') }}">Return to booking list</a>
</body>
</html>
