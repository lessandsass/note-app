<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return view('note.index');
    }

    public function create()
    {
        return view('note.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Note $note)
    {
        return view('note.show', $note);
    }

    public function edit(Note $note)
    {
        return view('note.edit');
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
