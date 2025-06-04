<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::with('user')->get();
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
                'datetime' => 'required|date',
                'paid' => 'boolean',
                'notes' => 'required|string',
                'satisfaction' => 'nullable|integer|min:0|max:10'
            ]);
            
            $validated['user_id'] = 1;
            $validated['paid'] = $request->has('paid');
            $validated['datetime'] = date('Y-m-d H:i:s', strtotime($validated['datetime']));

            if (!User::find($validated['user_id'])) {
                return back()->withErrors(['user_id' => 'El usuario no existe en la base de datos.']);
            }
            
            Activity::create($validated);
            Log::info('Actividad creada:', $validated);
            return redirect()->route('activities.index')->with('success', 'Created activity');
        } catch(\Throwable $err) {
            report($err);
            return back()->withErrors(['error' => $err->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::with('user')->findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::findOrFail($id);

        $validated = $request->validate([
            'type' => 'sometimes|required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'sometimes|required|exists:users,id',
            'datetime' => 'sometimes|required|date',
            'paid' => 'nullable',
            'notes' => 'sometimes|required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10'
        ]);

        $validated['paid'] = $request->has('paid');

        // Solo convertir datetime si existe en el array validated
        if (isset($validated['datetime'])) {
            $validated['datetime'] = date('Y-m-d H:i:s', strtotime($validated['datetime']));
        }

        Log::info('Updating activity:', $validated);
        $activity->update($validated);

        return redirect()->route('activities.index')->with('success', 'Activity updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted succesfully');
    }
}
