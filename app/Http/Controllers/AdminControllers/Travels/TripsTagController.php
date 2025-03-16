<?php

namespace App\Http\Controllers\AdminControllers\Travels;

use App\Models\Travels\TripsTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TripsTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tripsTags = TripsTag::all();
        return view('admin.trips-tag.index',compact('tripsTags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trips-tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255|unique:trips_tag,title',
        ]);
    
        TripsTag::create([
            'title' => $request->title,
        ]);
        return redirect()->back()->with('success',' Trip Tags Successfully added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tripsTag = TripsTag::findOrFail($id);
        return view('admin.trips-tag.edit', compact('tripsTag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:trips_tag,title,' . $id,
        ]);
    
        $tripsTag = TripsTag::findOrFail($id);
    
        $tripsTag->update([
            'title' => $request->title,
        ]);
    
        return redirect()->back()->with('success', 'Trip Tag updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = TripsTag::findOrFail($id);
    
        $tag->delete();
        return response()->json(['success' => 'Trip Tag deleted successfully.']);
    }
}
