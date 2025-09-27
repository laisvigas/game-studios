<?php

namespace App\Http\Controllers;
use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studios = Studio::withCount('games')->get(); // count the number of games for each studio
        $totalStudios = Studio::count(); // count the number of studios
        return view('studios.index', compact('studios', 'totalStudios'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'studio_name' => 'required|string|max:255',
            'logo' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Studio::create([
            'studio_name' => $request->studio_name,
            'logo' => $request->logo,
            'description' => $request->description,
        ]);

        return redirect()->route('studios.index')->with('success', 'Studio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
