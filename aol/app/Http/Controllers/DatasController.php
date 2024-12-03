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
<<<<<<< Updated upstream
    // Validate the incoming request
=======
>>>>>>> Stashed changes
    $data = $request->validate([
        'Title' => 'required',
        'Description' => 'required',
        'Location' => 'required',
        'Tingkat-Kesulitan' => 'required',
<<<<<<< Updated upstream
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $data['photo_url'] = $imagePath; // Store the path to the image in the 'photo_url' column
    }

    // Set the authenticated user's ID for the 'users_id' column
    $data['users_id'] = auth()->id();  // Ensure the user is authenticated

    // Store the product data in the database
    Datas::create($data);

    // Redirect to the navigation page after successful submission
    return redirect()->route('navigation');
=======
        'Status' => 'required|string',  // Ensure Status is provided
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handling file upload if there's an image
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;
    }

    // Store the new product, including the status field
    $newDatas = datas::create([
        'Title' => $data['Title'],
        'Description' => $data['Description'],
        'Location' => $data['Location'],
        'Tingkat-Kesulitan' => $data['Tingkat-Kesulitan'],
        'Status' => $data['Status'],  // Add the status value
        'photo_url' => $data['image'] ?? null, // Add photo_url if it exists
    ]);

    // Redirect back to create with success message
    return redirect(route('products.create'))->with('success', 'Product created successfully!')->with('product', $newDatas);
>>>>>>> Stashed changes
}



<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
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
