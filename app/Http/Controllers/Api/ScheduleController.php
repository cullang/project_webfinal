<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $schedules = $request->user()->schedules()->orderBy('day')->orderBy('start_time')->get();
        return response()->json($schedules);
    }
#jadwal kuliah
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'day'        => 'required|string',
            'start_time' => 'required|string',
            'end_time'   => 'required|string',
            'type'       => 'required|string',
            'room'       => 'nullable|string',
            'lecturer'   => 'nullable|string',
            'notes'      => 'nullable|string',
        ]);

        $schedule = $request->user()->schedules()->create($data);

        return response()->json($schedule, 201);
    }

    public function update(Request $request, Schedule $schedule)
    {
        if ($schedule->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $data = $request->validate([
            'name'       => 'sometimes|string|max:255',
            'day'        => 'sometimes|string',
            'start_time' => 'sometimes|string',
            'end_time'   => 'sometimes|string',
            'type'       => 'sometimes|string',
            'room'       => 'nullable|string',
            'lecturer'   => 'nullable|string',
            'notes'      => 'nullable|string',
        ]);

        $schedule->update($data);

        return response()->json($schedule);
    }

    public function destroy(Request $request, Schedule $schedule)
    {
        if ($schedule->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $schedule->delete();

        return response()->json(['message' => 'Jadwal berhasil dihapus.']);
    }
}
