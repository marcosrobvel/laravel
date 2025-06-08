<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'nullable|array',
            'photo.*' => 'string', // Asumiendo que son nombres de archivos
            'roomNumber' => 'required|integer|unique:rooms,roomNumber',
            'roomType' => 'required|string',
            'amenities' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'offer_price' => 'nullable|numeric|min:0',
            'status' => 'required|in:available,booked',
        ]);

        // Guardar photo como JSON
        if (isset($validated['photo'])) {
            $validated['photo'] = json_encode($validated['photo']);
        }

        Room::create($validated);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::findOrFail($id);

        $validated = $request->validate([
            'photo' => 'nullable|array',
            'photo.*' => 'string',
            'roomNumber' => 'required|integer|unique:rooms,roomNumber,' . $room->id,
            'roomType' => 'required|string',
            'amenities' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'offer_price' => 'nullable|numeric|min:0',
            'status' => 'required|in:available,booked',
        ]);

        if (isset($validated['photo'])) {
            $validated['photo'] = json_encode($validated['photo']);
        }

        $room->update($validated);

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
