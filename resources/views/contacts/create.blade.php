@extends('layouts.app')

<form action="{{ route('activities.store') }}" method="POST">
    @csrf
     <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="surf">Surf</option>
            <option value="windsurf">Windsurf</option>
            <option value="kayak">Kayak</option>
            <option value="atv">ATV</option>
            <option value="hot air ballon">Hot Air Balloon</option>
        </select>
<br><br>
        <label for="dateTime">Date:</label>
        <input type="datetime-local" name="datetime" id="datetime" required>
<br><br>
        <label for="paid">Paid:</label>
        <input type="checkbox" name="paid" id="paid" value="1">
<br><br>
        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes" required></textarea>
<br><br>
        <label for="satisfaction">Satisfaction (0-10):</label>
        <input type="number" name="satisfaction" id="satisfaction" min="0" max="10">
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


<a href="{{ route('activities.index') }}">Volver a la lista de actividades</a>
<br><br>