<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest' => 'required|string|max:255',
            'orderDate' => 'required|date',
            'checkIn' => 'required|date',
            'checkOut' => 'required|date|after_or_equal:checkIn',
            'special' => 'nullable|string',
            'roomType' => 'required|string|max:100',
            'roomNumber' => 'required',
            'bookStatus' => 'required|string|max:50',
            'photo' => 'nullable|array',
            'photo.*' => 'image|max:2048', // cada foto max 2MB
        ]);

        // Subir fotos y obtener paths
        $photoPaths = [];
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $file) {
                $photoPaths[] = $file->store('bookings', 'public');
            }
        }

        $booking = Booking::create([
            'guest' => $validated['guest'],
            'orderDate' => $validated['orderDate'],
            'checkIn' => $validated['checkIn'],
            'checkOut' => $validated['checkOut'],
            'special' => $validated['special'] ?? null,
            'roomType' => $validated['roomType'],
            'roomNumber' => $validated['roomNumber'],
            'bookStatus' => $validated['bookStatus'],
            'photo' => json_encode($photoPaths),
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'guest' => 'required|string|max:255',
            'orderDate' => 'required|date',
            'checkIn' => 'required|date',
            'checkOut' => 'required|date|after_or_equal:checkIn',
            'special' => 'nullable|string',
            'roomType' => 'required|string|max:100',
            'roomNumber' => 'required',
            'bookStatus' => 'required|string|max:50',
            'photo' => 'nullable|array',
            'photo.*' => 'image|max:2048',
        ]);

        // Manejar nuevas fotos (opcional)
        $photoPaths = json_decode($booking->photo, true) ?: [];
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $file) {
                $photoPaths[] = $file->store('bookings', 'public');
            }
        }

        $booking->update([
            'guest' => $validated['guest'],
            'orderDate' => $validated['orderDate'],
            'checkIn' => $validated['checkIn'],
            'checkOut' => $validated['checkOut'],
            'special' => $validated['special'] ?? null,
            'roomType' => $validated['roomType'],
            'roomNumber' => $validated['roomNumber'],
            'bookStatus' => $validated['bookStatus'],
            'photo' => json_encode($photoPaths),
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        // Borrar fotos almacenadas
        if ($booking->photo) {
            foreach (json_decode($booking->photo, true) as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }

        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
