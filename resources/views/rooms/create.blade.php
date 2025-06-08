@extends('layouts.app')

<form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="photo">Photos (puedes subir varias):</label>
    <input type="file" name="photo[]" id="photo" multiple required>
    <br><br>

    <label for="roomNumber">Room Number:</label>
    <input type="number" name="roomNumber" id="roomNumber" required>
    <br><br>

    <label for="roomType">Room Type:</label>
    <input type="text" name="roomType" id="roomType" required>
    <br><br>

    <label for="amenities">Amenities (separadas por coma):</label>
    <input type="text" name="amenities" id="amenities" required>
    <br><br>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <br><br>

    <label for="offer_price">Offer Price:</label>
    <input type="number" name="offer_price" id="offer_price" step="0.01">
    <br><br>

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="available">Available</option>
        <option value="booked">Booked</option>
    </select>
    <br><br>

    <button type="submit">Save</button>
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

<a href="{{ route('rooms.index') }}">Volver a la lista de habitaciones</a>
<br><br>
