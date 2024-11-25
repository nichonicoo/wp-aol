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
        return view('assets.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Location' => 'required',
            'Tingkat-Kesulitan' => 'required'
            // 'photo_url' => 'required'
        ]);

        $newDatas = datas::create($data);

        return redirect(route('products.index'));
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
