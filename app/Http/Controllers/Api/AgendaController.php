<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $agendas = $request->user()->agendas()->orderBy('date')->get();
        return response()->json($agendas);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'date'        => 'required|date',
            'category'    => 'required|string',
            'time'        => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $agenda = $request->user()->agendas()->create($data);

        return response()->json($agenda, 201);
    }
#kalender pribadi   
    public function update(Request $request, Agenda $agenda)
    {
        if ($agenda->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $data = $request->validate([
            'title'       => 'sometimes|string|max:255',
            'date'        => 'sometimes|date',
            'category'    => 'sometimes|string',
            'time'        => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $agenda->update($data);

        return response()->json($agenda);
    }

    public function destroy(Request $request, Agenda $agenda)
    {
        if ($agenda->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $agenda->delete();

        return response()->json(['message' => 'Agenda berhasil dihapus.']);
    }
}
