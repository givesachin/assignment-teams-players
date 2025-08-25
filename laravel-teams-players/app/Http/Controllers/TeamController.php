<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\PlayerTeam;
use App\Http\Resources\TeamResource;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::with('players')->get();

        return TeamResource::collection($teams);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $team = Team::create($validated);

        return new TeamResource($team);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new TeamResource(Team::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'state' => 'sometimes|required|string|max:255',
            'country' => 'sometimes|required|string|max:255',
            'players' => 'array',
        ]);

        $team->update(collect($validated)->only(['name', 'state', 'country'])->toArray());

        return new TeamResource($team);
    }

    public function updateAll(Request $request)
    {
        $validated = $request->validate([
            'teams' => 'required|array',
            'teams.*.id' => 'required|exists:teams,id',
            'teams.*.name' => 'sometimes|required|string|max:255',
            'teams.*.state' => 'sometimes|required|string|max:255',
            'teams.*.country' => 'sometimes|required|string|max:255',
            'teams.*.players' => 'array',
            'teams.*.players.*.id' => 'required|integer|exists:players,id',
        ]);

        $teams = $request->input('teams', []);

        foreach ($teams as $teamData) {
            $team = Team::findOrFail($teamData['id']);
            
            $team->update(collect($validated)->only(['name', 'state', 'country'])->toArray());

            $syncData = [];

            foreach ($teamData['players'] as $index => $playerData) {
                $syncData[$playerData['id']] = [
                    'sort_order' => $index + 1,
                ];
            }

            $team->players()->sync($syncData);
        }

        return response()->json(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return response()->json(null, 204);
    }
}
