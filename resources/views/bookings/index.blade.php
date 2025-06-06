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

                <div class="photos">
                    @foreach (json_decode($booking->photo, true) as $photo)
                        <img src="{{ asset('storage/' . $photo) }}" alt="Photo" width="150" style="margin-right: 10px;">
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
