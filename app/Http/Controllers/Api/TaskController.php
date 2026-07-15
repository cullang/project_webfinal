<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->orderBy('deadline_date')->get();
        return response()->json($tasks);
    }
#deadline tugas
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'subject'       => 'nullable|string',
            'deadline_date' => 'required|date',
            'status'        => 'sometimes|string|in:Proses,Urgent,Selesai',
        ]);

        $task = $request->user()->tasks()->create($data);

        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task)
    {
        if ($task->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $data = $request->validate([
            'name'          => 'sometimes|string|max:255',
            'subject'       => 'nullable|string',
            'deadline_date' => 'sometimes|date',
            'status'        => 'sometimes|string|in:Proses,Urgent,Selesai',
        ]);

        $task->update($data);

        return response()->json($task);
    }

    public function destroy(Request $request, Task $task)
    {
        if ($task->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $task->delete();

        return response()->json(['message' => 'Tugas berhasil dihapus.']);
    }
}
