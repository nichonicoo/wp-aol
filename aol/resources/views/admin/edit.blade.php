@extends('layouts.navigation')

@section('content')

<div class="container mx-auto px-4">
    <h2 class="text-2xl font-semibold text-gray-800 mt-16 mb-8 text-center">Edit Data</h2>

    <form action="{{ route('admin.update', ['id' => $datas->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title Input -->
        <div class="mb-4">
            <label for="Title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="Title" id="Title" value="{{ $datas->Title }}" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Description Input -->
        <div class="mb-4">
            <label for="Description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="Description" id="Description" value="{{ $datas->Description }}" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Location Input -->
        <div class="mb-4">
            <label for="Location" class="block text-sm font-medium text-gray-700">Location</label>
            <select name="Location" id="Location" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @foreach ($locations as $location)
                    <option value="{{ $location }}" {{ $datas->Location == $location ? 'selected' : '' }}>{{ $location }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tingkat Kesulitan Input -->
        <div class="mb-4">
            <label for="Tingkat_Kesulitan" class="block text-sm font-medium text-gray-700">Tingkat Kesulitan</label>
            <select name="Tingkat_Kesulitan" id="Tingkat_Kesulitan" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @foreach ($tingkats as $tingkat)
                    <option value="{{ $tingkat }}" {{ $datas->Tingkat_Kesulitan == $tingkat ? 'selected' : '' }}>{{ $tingkat }}</option>
                @endforeach
            </select>
        </div>

        <!-- Status Input -->
        <div class="mb-4">
            <label for="Status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="Status" id="Status" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @foreach ($stats as $status)
                    <option value="{{ $status }}" {{ $datas->Status == $status ? 'selected' : '' }}>{{ $status }}</option>
                @endforeach
            </select>
        </div>

        <!-- Image Input -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
            <input type="file" name="image" id="image" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            @if ($datas->photo_url)
                <img src="{{ asset('storage/' . $datas->photo_url) }}" class="mt-4 w-32 h-32">
            @endif
        </div>

        <button type="submit" class="w-full bg-indigo-500 text-white p-3 rounded-md shadow-sm hover:bg-indigo-600">Update Data</button>
    </form>
</div>

@endsection
