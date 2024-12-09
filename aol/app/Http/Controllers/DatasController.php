<?php

namespace App\Http\Controllers;

use App\Models\datas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DatasController extends Controller
{

    public function search(Request $request)
    {
        // Ambil query pencarian dari request
        $query = $request->input('query');

        // Ambil data berdasarkan query yang dicari, misalnya berdasarkan title
        $datas = Datas::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(9);  // Atur pagination sesuai kebutuhan Anda

        // Kirim data ke view
        return view('search-result', compact('datas', 'query'));
    }



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
            // 'Tanggal_Pembuatan' => 'required',  // Validate the Status field
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

        $data['Tanggal_Pembuatan'] = now()->toDateString();

        Datas::create([
            'Title' => $request->Title,
            'Description' => $request->Description,
            'Location' => $request->Location,
            'Tingkat_Kesulitan' => $data['Tingkat_Kesulitan'],
            'users_id' => Auth()->id(),
            'Status' => $request->Status,
            'Tanggal_Pembuatan' => $data['Tanggal_Pembuatan'],
            'photo_url' => $data['photo_url']
        ]);

        // Redirect to the navigation page after successful submission
        return redirect()->route('dashboard');
    }

    public function edit_datas($id)
    {

        $datas = datas::findOrFail($id);

        $locations = ['Jakarta', 'Bali', 'Sumatra', 'Kalimantan', 'Papua', 'Surabaya', 'Aceh'];
        $tingkats = ['Sangat Susah', 'Susah', 'Normal', 'Gampang'];
        $stats = ['Sudah Selesai', 'Sedang Dikerjakan', 'Sedang Di Diskusikan', 'Belum Dikerjakan'];

        return view('users.edit', compact('datas', 'locations', 'tingkats', 'stats'));
    }

    public function update_datas(Request $request, $id)
    {

        $data = Datas::findOrFail($id);

        $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Tingkat_Kesulitan' => 'required',
            'Location' => 'required',
            'Status' => 'required',
            'photo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        if ($request->hasFile('image')) {

            if ($data->photo_url && Storage::disk('public')->exists($data->photo_url)) {
                Storage::disk('public')->delete($data->photo_url);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('images', 'public');
            $data->photo_url = $imagePath; // Update the path to the image in the 'photo_url' column
        }

        $data->Title = $request->Title;
        $data->Description = $request->Description;
        $data->Location = $request->Location;
        $data->Status = $request->Status;
        $data->Tingkat_Kesulitan = $request->Tingkat_Kesulitan;
        $data->photo_url = $data->photo_url;
        $data->save();

        return redirect()->route('dashboard')->with('success', 'Data updated successfully.');
    }

    public function delete_datas($id): RedirectResponse
    {
        $data  = Datas::findOrFail($id);

        if ($data->photo_url && Storage::disk('public')->exists($data->photo_url)) {
            Storage::disk('public')->delete($data->photo_url);
        }

        $data->delete();

        return redirect()->route('dashboard')->with('success', 'Data deleted successfully.');
    }

    public function aboutUs()
    {

        return view('AboutUs');
    }

    public function admin_Dash()
    {

        $datas2 = datas::all();

        // Pass the data to the view
        return view('admin.dashboard', compact('datas2'));
    }

    public function admin_edit($id)
    {

        $datas = datas::findOrFail($id);

        $locations = ['Jakarta', 'Bali', 'Sumatra', 'Kalimantan', 'Papua', 'Surabaya', 'Aceh'];
        $tingkats = ['Sangat Susah', 'Susah', 'Normal', 'Gampang'];
        $stats = ['Sudah Selesai', 'Sedang Dikerjakan', 'Sedang Di Diskusikan', 'Belum Dikerjakan'];

        return view('admin.edit', compact('datas', 'locations', 'tingkats', 'stats'));
    }

    public function admin_Update(Request $request, $id)
    {
        $data = Datas::findOrFail($id);

        $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Location' => 'required',
            'Tingkat_Kesulitan' => 'required',
            'Status' => 'required',
            'photo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        if ($request->hasFile('image')) {

            if ($data->photo_url && Storage::disk('public')->exists($data->photo_url)) {
                Storage::disk('public')->delete($data->photo_url);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('images', 'public');
            $data->photo_url = $imagePath; // Update the path to the image in the 'photo_url' column
        }

        $data->Title = $request->Title;
        $data->Description = $request->Description;
        $data->Location = $request->Location;
        $data->Tingkat_Kesulitan = $request->Tingkat_Kesulitan;
        $data->photo_url = $data->photo_url;
        $data->Status = $request->Status;
        $data->save();

        return redirect()->route('admin.dashboard')->with('success', 'Data updated successfully.');
    }

    public function admin_Delete_Report($id): RedirectResponse
    {
        $data  = Datas::findOrFail($id);

        if ($data->photo_url && Storage::disk('public')->exists($data->photo_url)) {
            Storage::disk('public')->delete($data->photo_url);
        }
        $data->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data deleted successfully.');
    }

    public function data_detail(datas $id)
    {
        return view('details', ['id' => $id]);
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
