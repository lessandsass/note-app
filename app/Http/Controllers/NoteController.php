<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::query()->orderBy('created_at', 'desc')->paginate(10);
        return view('note.index', [ 'notes' => $notes ]);
    }

    public function create()
    {
        return view('note.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'note' => ['required', 'min:15', 'max:5000', 'string'],
        ]);

        $data['user_id'] = 1;
        $note = Note::create($data);
        return to_route('note.show', $note)->with('message', 'Note was created successfully');

    }

    public function show(Note $note)
    {
        return view('note.show', [ 'note' => $note]);
    }

    public function edit(Note $note)
    {
        return view('note.edit', [ 'note' => $note ]);
    }

    public function update(Request $request, Note $note)
    {
        //
    }

    public function destroy(Note $note)
    {
        //
    }
}
