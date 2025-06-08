@extends('layouts.app')

@section('content')
    <h1>Bookings</h1>

    <div class="booking-list">
        @foreach ($bookings as $booking)
            <div class="booking" style="border: 1px solid #ccc; padding: 1rem; margin-bottom: 1rem;">
                <h2>Guest: {{ $booking->guest }}</h2>
                <p><strong>Order Date:</strong> {{ $booking->orderDate }}</p>
                <p><strong>Check-In:</strong> {{ $booking->checkIn }}</p>
                <p><strong>Check-Out:</strong> {{ $booking->checkOut }}</p>
                <p><strong>Room Type:</strong> {{ $booking->roomType }}</p>
                <p><strong>Room Number:</strong> {{ $booking->roomNumber }}</p>
                <p><strong>Status:</strong> {{ ucfirst($booking->bookStatus) }}</p>

                @if ($booking->special)
                    <p><strong>Special Request:</strong> {{ $booking->special }}</p>
                @endif

                <div class="photos" style="margin-bottom: 1rem;">
                    @foreach (json_decode($booking->photo, true) as $photo)
                        <img src="{{ asset('storage/' . $photo) }}" alt="Photo" width="150" style="margin-right: 10px;">
                    @endforeach
                </div>

                <div class="actions">
                    <a href="{{ route('bookings.edit', $booking->id) }}" style="margin-right: 10px;">Edit</a>
                    <a href="{{ route('bookings.show', $booking->id) }}" style="margin-right: 10px;">Details</a>

                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this booking?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
