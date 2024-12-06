<?php

namespace App\Http\Controllers;

use App\Models\datas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

 class DatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // $datas = Datas::all();  // Fetch all products from the database
    // return view('layouts.navigation', compact('datas'));

    $datas = Datas::where('users_id', Auth::id())->get();

    // Pass the data to the view
    return view('dashboard', compact('datas'));
    }

    public function index_pubs()
    {
    // $datas = Datas::all();  // Fetch all products from the database
    // return view('layouts.navigation', compact('datas'));

    $datas = datas::paginate(3);

    // Pass the data to the view
    return view('Home', compact('datas'));
    }

    public function allreports()
    {
    // $datas = Datas::all();  // Fetch all products from the database
    // return view('layouts.navigation', compact('datas'));

    $datas2 = datas::all();

    // Pass the data to the view
    return view('AllReports', compact('datas2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Define the available options for location, difficulty, and status
        $locations = ['Jakarta', 'Bali', 'Sumatra', 'Kalimantan', 'Papua', 'Surabaya', 'Aceh'];
        $tingkats = ['Sangat Susah', 'Susah', 'Normal', 'Gampang'];
        $stats = ['Sudah Selesai', 'Sedang Dikerjakan', 'Sedang Di Diskusikan', 'Belum Dikerjakan'];

        // Pass them to the view
        return view('assets.create', compact('locations', 'tingkats', 'stats'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // dd($request);
    // Check if the user is authenticated
    if (!Auth::check()) {
        return redirect()->route('login'); // Redirect to login if the user is not authenticated
    }

    // Validate the incoming request
    $data = $request->validate([
        'Title' => 'required',
        'Description' => 'required',
        'Location' => 'required',
        'Tingkat_Kesulitan' => 'required',
        'Status' => 'required',
        'Tanggal_Pembuatan' => 'required',  // Validate the Status field
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $data['photo_url'] = $imagePath; // Store the path to the image in the 'photo_url' column
    }

    $data['users_id'] = Auth::id();

    // Set the authenticated user's ID for the 'users_id' column
    $data['users_id'] = Auth::id();  // Ensure the user is authenticated

    // Store the product data in the database
    // Datas::create($data);

    Datas::create([
        'Title' => $request->Title,
        'Description' => $request->Description,
        'Location' => $request->Location,
        'Tingkat_Kesulitan' => $data['Tingkat_Kesulitan'],
        'users_id' => Auth()->id(),
        'Status' => $request->Status,
        'Tanggal_Pembuatan' => $request->Tanggal_Pembuatan,
        'photo_url' => $data['photo_url']
    ]);

    // Redirect to the navigation page after successful submission
    return redirect()->route('dashboard');

}

    public function aboutUs(){

        return view('AboutUs');
    }

    public function admin_Dash(){

    $datas2 = datas::all();

    // Pass the data to the view
    return view('admin.dashboard', compact('datas2'));
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
