<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;        




class EntryApiController extends Controller
{
    
    public function index()
    {
        $entries = Entry::all();
        return $entries;
    }

    public function destroy(Request $request)
    {
        // $entry->delete();
        // return $entries;
        // return redirect('/entries_list')->with('message', 'Entry deleted successfully.');
        // return redirect()->route('/entries_list.index')->with('message', 'Entry deleted successfully.');

        // Entry::destroy($entry);
        // return response(null, Response::HTTP_OK);


        // Entry::destroy($entry);
        // return response()->json([
        //     "message" => "Entry deleted successfully."
        // ]);
        $entry = Entry::where("id", $request->entry)->first();

        if ($entry != null) {
            $entry->delete();
            return redirect()->route('entries.index')->with('message', 'Entry deleted successfully.');
            
        }

    }

    // public function create()
    // {
    //     return view('entries.create');
    // }

    public function store(Request $request)
    {
        $inputs = $request->all();
        Entry::create($inputs);
        return view('entries.create');
        // return redirect()->route('entries.index')->with('message', 'Entry created successfully.');

    }

    public function show(Entry $entry)
    {
        return view('entries.show', compact('entry'));
    }

    // public function edit(Entry $entry)
    // {
    //     // return view('entries.edit', compact('entries'));
    //     return $entries;
    // }

    public function edit($entryId)
    {
        \Log::debug("ああああああ");
        $entry = Entry::find($entryId);
        \Log::debug($entryId);
        return $entry;
    }

    public function update(Request $request, Entry $entryId)   
    {
    

        

        $entry = Entry::findOrFail($entryId)->first();
        
        $entry->entry_name = $request->entry_name;
        \Log::debug($entryId->entry_name);
        \Log::debug($entryId);
        \Log::debug($entryId->amount);
        \Log::debug("ももももももも");
        \Log::debug($request);
        
        $entry->master_category = $request->master_category;
        $entry->amount = $request->amount;
        $entry->due_date = $request->due_date;
        $entry->save();
        // $entryId->id = Entry::find($request, $id);
        // \Log::debug($entryId->id);
        // $entryId->entry_name = $request->entry_name;
        // $entryId->master_category = $request->master_category;
        // $entryId->amount = $request->amount;
        // $entryId->due_date = $request->due_date;
        // $post->save();
      
            
        // \Log::debug("いいいいいい");
        // \Log::debug($entryId->id);

        // $entryid = Entry::find($entryId)->first();
        // \Log::debug($entryId->id);
        // \Log::debug($entryId);

        // $entryId = entry_name’,1)->first();
        // $entryId->entry_name = $request->entry_name;
        // \Log::debug($entryId->entry_name);
        // $entryId->master_category = $request->master_category;
        // $entryId->amount = $request->amount;
        // $entryId->due_date = $request->due_date;
        // $entryId->save();
        // $id = Entry::find($request->id);
        // \Log::debug($entryId->id);
        // \Log::debug($entryId->entry_name);
        // \Log::debug($entryId->master_category);
        // \Log::debug($entryId->amount);
        // \Log::debug($entryId->due_date);
        // \Log::debug($entryId);
        // $entryId->entry_name = $request->entry_name;
        // $entryId->entry_name = $request->entry_name;
    //     \Log::debug($entryId->entry_name);
    //     \Log::debug($entryId);
    // $entryId->update($request->master_category);
        // $entryId->master_category = $request->master_category;
        // \Log::debug($entryId->master_category);
        // \Log::debug($entryId);
        // $entryId->update($request->amount);
        // $entryId->amount = $request->amount;
        // \Log::debug($entryId->amount);
        // \Log::debug($entryId);
        
        // $entryId->due_date = update($request->due_date);
        // $entryId->save();
        
        return redirect()->route('entries.index')->with('message', 'Entry updated successfully.');
    }
}