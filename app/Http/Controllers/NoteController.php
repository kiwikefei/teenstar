<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
class NoteController extends Controller
{
    //
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }
    public function store(Request $request)
    {
        Note::create($request->only(['title']));
        return redirect()->route('notes.index');
    }
}
