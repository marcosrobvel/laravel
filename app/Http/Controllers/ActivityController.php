<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

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
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $activity = new Activity();
        $activity->title = $request->title;
        $activity->description = $request->description;
        
        // $activity->user_id = auth()->id(); // Solo si hay login

        $activity->save();

        return redirect()->route('activities.index')->with('success', 'Actividad creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->save();

        return redirect()->route('activities.index')->with('success', 'Actividad actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Actividad eliminada.');
    }
}
