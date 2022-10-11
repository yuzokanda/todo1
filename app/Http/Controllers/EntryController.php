<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;        




class EntryController extends Controller
{
    
    public function index()
    {
        $entries = Entry::paginate();
        return view('entries.index', compact('entries'));
    }

    public function show(Entry $entry)
    {
        return view('entries.show', compact('entry'));
    }

    public function create()
    {
        return view('entries.create');
    }

    // public function store(Request $request)
    // {
    //     $inputs = $request->all();
    //     Entry::create($inputs);
    //     return view('entries.create');
    //     // return redirect()->route('entries.index')->with('message', 'Entry created successfully.');

    // }

    public function edit()
    {
        // return view('entries.edit', compact('entryId'));
        return view('entries.edit');
    }

    public function update(Request $request, Entry $entry)
    {
        $inputs = $request->all();
        if (!isset($inputs['completed'])) $inputs['completed'] = false;
        $entry->update($inputs);

        return redirect()->route('entries.index')->with('message', 'Entry updated successfully.');
    }

    public function destroy(Entry $entry)
    {
        $entry->delete();

        return redirect()->route('entries.index')->with('message', 'Entry deleted successfully.');
    }
}
