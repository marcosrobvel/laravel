@extends('layouts.app')

@section('content')
    <h1>Edit Booking</h1>

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="guest">Guest:</label>
        <input type="text" id="guest" name="guest" value="{{ old('guest', $booking->guest) }}" required>
        <br><br>

        <label for="orderDate">Order Date:</label>
        <input type="date" id="orderDate" name="orderDate" value="{{ old('orderDate', $booking->orderDate) }}" required>
        <br><br>

        <label for="checkIn">Check-In:</label>
        <input type="date" id="checkIn" name="checkIn" value="{{ old('checkIn', $booking->checkIn) }}" required>
        <br><br>

        <label for="checkOut">Check-Out:</label>
        <input type="date" id="checkOut" name="checkOut" value="{{ old('checkOut', $booking->checkOut) }}" required>
        <br><br>

        <label for="special">Special Request:</label>
        <input type="text" id="special" name="special" value="{{ old('special', $booking->special) }}">
        <br><br>

        <label for="roomType">Room Type:</label>
        <input type="text" id="roomType" name="roomType" value="{{ old('roomType', $booking->roomType) }}" required>
        <br><br>

        <label for="roomNumber">Room Number:</label>
        <input type="text" id="roomNumber" name="roomNumber" value="{{ old('roomNumber', $booking->roomNumber) }}" required>
        <br><br>

        <label for="bookStatus">Status:</label>
        <input type="text" id="bookStatus" name="bookStatus" value="{{ old('bookStatus', $booking->bookStatus) }}" required>
        <br><br>

        <label for="photo">Photos (optional):</label>
        <input type="file" id="photo" name="photo[]" multiple>
        <br><br>

        <button type="submit">Update Booking</button>
    </form>

    <br>
    <a href="{{ route('bookings.index') }}">Back to bookings list</a>
@endsection
