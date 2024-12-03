<?php

namespace App\Http\Controllers;

use App\Models\datas;
use Illuminate\Http\Request;

 class DatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $datas = Datas::all();  // Fetch all products from the database
    return view('layouts.navigation', compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve Locations and Difficulty Levels from the database or use hardcoded values
        $locations = ['Jakarta', 'Bali', 'Sumatra', 'Kalimantan', 'Papua', 'Surabaya', 'Aceh'];
        $tingkats = ['Sangat Susah', 'Susah', 'Normal', 'Gampang'];

        return view('assets.create', compact('locations', 'tingkats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request
    $data = $request->validate([
        'Title' => 'required',
        'Description' => 'required',
        'Location' => 'required',
        'Tingkat-Kesulitan' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $data['image'] = $imagePath;
    }

    // Store the product data in the database
    Datas::create($data);

    // Redirect to the navigation page after successful submission
    return redirect()->route('navigation');
}



    /**
     * Display the specified resource.
     */
    public function show(datas $datas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(datas $datas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, datas $datas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(datas $datas)
    {
        //
    }
}
