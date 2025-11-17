<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource. (GET /teams)
     */
    public function index()
    {
        $teams = Team::all();
        return response()->json($teams);
    }

    /**
     * Store a newly created resource in storage. (POST /teams)
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|string|max:15|unique:teams,nim',
            'full_name' => 'required|string|max:150',
            'role' => 'nullable|string|max:255',
        ]);

        $team = Team::create($validatedData);
        return response()->json($team, 201);
    }

    /**
     * Display the specified resource. (GET /teams/{team})
     */
    public function show(Team $team)
    {
        return response()->json($team);
    }

    /**
     * Update the specified resource in storage. (PUT/PATCH /teams/{team})
     */
    public function update(Request $request, Team $team)
    {
        $validatedData = $request->validate([
            'nim' => 'string|max:15|unique:teams,nim,' . $team->id, // Abaikan NIM saat ini
            'full_name' => 'string|max:150',
            'role' => 'nullable|string|max:255',
        ]);

        $team->update($validatedData);
        return response()->json($team);
    }

    /**
     * Remove the specified resource from storage. (DELETE /teams/{team})
     * Using Soft Delete
     */
    public function destroy(Team $team)
    {
        $team->delete(); // Ini akan melakukan Soft Delete
        return response()->json(null, 204);
    }
}