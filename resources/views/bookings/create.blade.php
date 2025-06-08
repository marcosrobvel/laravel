@extends('layouts.app')

<form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="guest">Guest Name:</label>
    <input type="text" name="guest" id="guest" required>
    <br><br>

    <label for="orderDate">Order Date:</label>
    <input type="date" name="orderDate" id="orderDate" required>
    <br><br>

    <label for="checkIn">Check-in Date:</label>
    <input type="date" name="checkIn" id="checkIn" required>
    <br><br>

    <label for="checkOut">Check-out Date:</label>
    <input type="date" name="checkOut" id="checkOut" required>
    <br><br>

    <label for="special">Special Request:</label>
    <textarea name="special" id="special" placeholder="Optional"></textarea>
    <br><br>

    <label for="roomType">Room Type:</label>
    <select name="roomType" id="roomType" required>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="suite">Suite</option>
        <option value="family">Family</option>
    </select>
    <br><br>

    <label for="roomNumber">Room Number:</label>
    <input type="text" name="roomNumber" id="roomNumber" required>
    <br><br>

    <label for="bookStatus">Booking Status:</label>
    <select name="bookStatus" id="bookStatus" required>
        <option value="confirmed">Confirmed</option>
        <option value="pending">Pending</option>
        <option value="cancelled">Cancelled</option>
        <option value="checked_in">Checked In</option>
        <option value="checked_out">Checked Out</option>
    </select>
    <br><br>

    <label for="photo">Upload Photo(s):</label>
    <input type="file" name="photo[]" id="photo" multiple accept="image/*">
    <br><br>

    <button type="submit">Save Booking</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<a href="{{ route('bookings.index') }}">Back to Booking List</a>
<br><br>
