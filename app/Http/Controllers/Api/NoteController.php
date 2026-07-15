<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $notes = $request->user()->notes()
            ->orderByDesc('is_important')
            ->orderByDesc('created_at')
            ->get();
        return response()->json($notes);
    }
#catatan mahasiswa
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'subject'      => 'nullable|string',
            'content'      => 'required|string',
            'is_important' => 'sometimes|boolean',
        ]);

        $note = $request->user()->notes()->create($data);

        return response()->json($note, 201);
    }

    public function update(Request $request, Note $note)
    {
        if ($note->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $data = $request->validate([
            'title'        => 'sometimes|string|max:255',
            'subject'      => 'nullable|string',
            'content'      => 'sometimes|string',
            'is_important' => 'sometimes|boolean',
        ]);

        $note->update($data);

        return response()->json($note);
    }

    public function destroy(Request $request, Note $note)
    {
        if ($note->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $note->delete();

        return response()->json(['message' => 'Catatan berhasil dihapus.']);
    }
}
